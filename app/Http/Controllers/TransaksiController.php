<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Transaksi;
// db
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function showTransaksiUser()
    {
        $user = auth()->user();
        $transaksi = Transaksi::where('id_user', $user->id)->get();
        return view('user.transaksi', compact('transaksi'));
    }
}
