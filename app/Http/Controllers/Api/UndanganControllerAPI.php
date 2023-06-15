<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Undangan;

// d
use Illuminate\Support\Facades\DB;

class UndanganControllerAPI extends Controller
{
    public function buy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'id_undangan' => 'required',
            'bank' => 'required|in:bca,bni,bri,mandiri',
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
                    ],
                    'bank_transfer' => [
                        'bank' => $request->bank,
                ]
            ]);
            if($response->failed()){
                return response()->json([
                    'status' => 'error',
                    'message' => 'failed charge',
                ], 500);
            }
            $result = $response->json();
            if($result['status_code'] != 201){
                return response()->json([
                    'status' => 'error',
                    'message' => $result['status_message'],
                ], 500);
            }

            DB::table('transaksis')->insert([
                'id' => $orderId,
                'id_user' => $request->id_user,
                'id_undangan' => $request->id_undangan,
                'total_harga' => $undangan->price,
                'created_at' => now(),
            ]);

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
                'user_id' => $request->id_user,
                'undangan_id' => $request->id_undangan,
            ]);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
