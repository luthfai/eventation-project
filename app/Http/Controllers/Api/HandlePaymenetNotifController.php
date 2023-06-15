<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;




class HandlePaymenetNotifController extends Controller
{
    /**
     * Handle the incoming request.
     *
     */
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
