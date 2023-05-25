<?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dash');
});

Route::middleware(['auth','role:super'])->group(function () {
    Route::get('/super/dashboard', [SuperAdminController::class, 'SuperDashboard'])->name('super.dash');
});

Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dash');
});

Route::resource('AboutUs', AboutUsController::class);

// Route::get('/AboutUs', function () {
//     return view('AboutUs');
// });
