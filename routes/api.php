<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UndanganControllerAPI;
use App\Http\Controllers\Api\HandlePaymenetNotifController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/undangan/buy', [UndanganControllerAPI::class, 'buy'])->name('buy');
Route::post('/midtrans/notif-hook', [UndanganControllerAPI::class, 'handle'])->name('midtrans.notif-hook');
