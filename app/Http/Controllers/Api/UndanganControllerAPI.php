<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
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

            Http::withBasic($serverKey, '')
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
                'status' => 'pending',
                'snap_token' => $result['token'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // create event
            $event = new Event();



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
