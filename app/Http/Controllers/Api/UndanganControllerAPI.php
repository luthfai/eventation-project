<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Undangan;
use App\Models\Transaksi;
// d
use Illuminate\Support\Facades\DB;
// log
use Illuminate\Support\Facades\Log;

class UndanganControllerAPI extends Controller
{
    public function buy(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'bank' => 'required|in:bca,bni,bri,mandiri',
            'id_undangan' => 'required',
            'email' => 'required|email',
            'nama' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 400);
        }

        $orderId = Str::uuid()->toString();
        $undangan = Undangan::find($request->id_undangan);
        try{
            DB::beginTransaction();
            $serverKey = config('midtrans.serverKey');

            $response = Http::withBasicAuth($serverKey, '')
                ->post('https://api.sandbox.midtrans.com/v2/charge', [
                    'payment_type' => 'bank_transfer',
                    'transaction_details' => [
                        'order_id' => $orderId,
                        'gross_amount' => $undangan->price,
                        'email' => $request->email,
                        'name' => $request->nama,
                    ],
                    'bank_transfer' => [
                        'bank' => $request->bank,
                ]
            ]);
            if($response->failed()){
                return redirect()->back()->with(['error' => 'Transaksi gagal']);
            }
            $result = $response->json();
            if($result['status_code'] != 201){
                return redirect()->back()->with(['error' => $result['status_message']]);
            }

            DB::table('transaksis')->insert([
                'id' => $orderId,
                'id_user' => $request->id_user,
                'id_undangan' => $request->id_undangan,
                'total_harga' => $undangan->price,
                'status' => 'pending',
                'no_va' => $result['va_numbers'][0]['va_number'],
                'created_at' => now(),
            ]);

            DB::commit();
            return redirect()->route('user.transaksi');
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function handle(Request $request)
    {
        $payload = $request->all();

        $orderId = $payload['order_id'];
        $statusCode = $payload['status_code'];
        $grossAmount = $payload['gross_amount'];

        $reqSignature = $payload['signature_key'];

        $signature = hash('sha512', $orderId . $statusCode . $grossAmount . config('midtrans.serverKey'));

        if($signature != $reqSignature){
            return response()->json([
                'status' => 'error',
                'message' => 'invalid signature',
            ], 401);
        }

        $transactionStatus = $payload['transaction_status'];
        $order = DB::table('transaksis')->where('id', $orderId)->first();
        if(!$order){
            return response()->json([
                'status' => 'error',
                'message' => 'order id not found',
            ], 404);
        }
        if($transactionStatus == 'settlement'){
            DB::table('transaksis')->where('id', $orderId)->update(['status' => 'success']);
            // create event
            DB::table('events')->insert([
                'title' => 'Wedding Invitation',
                'name1' => 'Nama Mempelai Pria',
                'nickname1' => 'Nama Panggilan Pria',
                'name2' => 'Nama Mempelai Wanita',
                'nickname2' => 'Nama Panggilan Wanita',
                'slug' => Str::random(10),
                'description' => 'Wedding Invitation',
                'location' => 'Jakarta',
                'event_date' => '2023-06-05 20:49:27',
                'start_date' => '2023-10-05 08:00:00',
                'end_date' => '2023-10-05 13:00:00',
                'image1' => '1.png',
                'image2' => '2.png',
                'video_url' => 'https://www.youtube.com/watch?v=1y6smkh6c-0',
                'event_audio' => 'https://www.youtube.com/watch?v=1y6smkh6c-0',
                'location_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.065508821737!2d106.8269843147699!3d-6.175392995527999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd61a0d9b1b1a9d%3A0x2b7b0d0b0b0b0b0b!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1622905209277!5m2!1sid!2sid',
                'user_id' => $order->id_user,
                'undangan_id' => $order->id_undangan,
            ]);
        }
        else if($transactionStatus == 'cancel' || $transactionStatus == 'expire'){
            DB::table('transaksis')->where('id', $orderId)->update(['status' => 'failure']);
        }
        else if($transactionStatus == 'pending'){
            DB::table('transaksis')->where('id', $orderId)->update(['status' => 'pending']);
        }

        Log::info('midtrans notification', [
            'order_id' => $orderId,
            'status_code' => $statusCode,
            'gross_amount' => $grossAmount,
            'transaction_status' => $transactionStatus,
            'payment_type' => $payload['payment_type'],
            'fraud_status' => $payload['fraud_status'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'success update status',
        ]);
    }


}
