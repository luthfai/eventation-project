<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AboutUsController;

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
        return view('dashboard');
    })->name('user.dash');
});

// Route::resource('AboutUs', AboutUsController::class);

Route::get('/about', function () {
    return view('AboutUs.index');
});


require __DIR__ . '/auth.php';
