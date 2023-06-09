<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InvitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// create route that automatically redirects to the dashboard based on the user's role
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $url = '';
        if (Auth::user()->role === 'admin') {
            $url = '/admin/dashboard';
        } elseif (Auth::user()->role === 'superadmin') {
            $url = '/super/dashboard';
        } else {
            $url = '/user/dashboard';
        }
        return redirect($url);
    })->name('dashboard');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dash');
    Route::get('/admin/dashboard/user', [AdminController::class, 'UserList'])->name('admin.user');
    Route::get('/admin/dashboard/user/{id}', [AdminController::class, 'UserEdit'])->name('admin.user.edit');
    Route::patch('/admin/dashboard/user/{id}', [AdminController::class, 'UserUpdate'])->name('admin.user.update');
    Route::delete('/admin/dashboard/user/{id}', [AdminController::class, 'UserDestroy'])->name('admin.user.destroy');
});

Route::middleware(['auth','role:superadmin'])->group(function () {
    Route::get('/super/dashboard', [SuperAdminController::class, 'SuperDashboard'])->name('super.dash');
    Route::get('/super/dashboard/admin', [SuperAdminController::class, 'AdminList'])->name('super.admin');
    Route::get('/super/dashboard/admin/{id}', [SuperAdminController::class, 'AdminEdit'])->name('super.admin.edit');
    Route::patch('/super/dashboard/admin/{id}', [SuperAdminController::class, 'AdminUpdate'])->name('super.admin.update');
    Route::delete('/super/dashboard/admin/{id}', [SuperAdminController::class, 'AdminDestroy'])->name('super.admin.destroy');
});

// user dashboard
Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('/user/dashboard');
    })->name('user.dash');
});

// Route::resource('AboutUs', AboutUsController::class);

Route::get('/about', function () {
    return view('about');
});

// route undangan controller with id parameter

require __DIR__ . '/auth.php';

// Route::get('/event', [EventController::class, 'index'])->name('event.index');
// Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
// Route::post('/event', [EventController::class, 'store'])->name('event.store');
// Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');
// Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
// Route::patch('/event/{id}', [EventController::class, 'update'])->name('event.update');
// Route::delete('/event/{id}', [EventController::class, 'destroy'])->name('event.destroy');
// guest get link from email with token
Route::get('/event/guest/{token}', [InvitController::class, 'guest'])->name('invite.guest');

// katalog undangan
Route::get('/templates', [UndanganController::class, 'katalog'])->name('undangan.katalog');
Route::get('/templates/{id}', [UndanganController::class, 'detail'])->name('undangan.detail');
