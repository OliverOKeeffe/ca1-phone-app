<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Brandcontroller;
use App\Http\Controllers\Retailercontroller;
use App\Http\Controllers\Admin\PhoneController as AdminPhoneController;
use App\Http\Controllers\User\PhoneController as UserPhoneController;
use App\Http\Controllers\Homecontroller;

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
    return view('welcome');
});

// Route::resource('brands', BrandController::class);
// Route::resource('retailers', RetailerController::class);
// Route::resource('phones', PhoneController::class);
Route::resource('phones', HomeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
require __DIR__.'/auth.php';
Route::resource('/user/phones', UserPhoneController::class)->middleware(['auth'])->names('user.phones')->only(['index', 'show']);
Route::resource('/admin/phones', AdminPhoneController::class)->middleware(['auth'])->names('admin.phons');