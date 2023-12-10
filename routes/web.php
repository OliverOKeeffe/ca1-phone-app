<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\PhoneController as AdminPhoneController;
use App\Http\Controllers\User\PhoneController as UserPhoneController;

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



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::resource('publishers', PublisherController::class);
    // Route::resource('phones', PhoneController::class);
    // Route::resource('authors', AuthorController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::resource('/phones', UserPhoneController::class)
        ->middleware(['auth', 'role:user,admin'])
        ->names('user.phones')
        ->only(['index', 'show']);
Route::resource('/admin/phones', AdminPhoneController::class)->middleware(['auth', 'role:admin'])->names('admin.phones');
Route::resource('/admin/brands', AdminBrandController::class)->middleware(['auth', 'role:admin'])->names('admin.brands');
Route::resource('/admin/retailers', AdminRetailerController::class)->middleware(['auth', 'role:admin'])->names('admin.retailers');

Route::resource('/user/phones', UserPhoneController::class)->middleware(['auth', 'role:user'])->names('user.phones');
Route::resource('/user/brands', UerBrandController::class)->middleware(['auth', 'role:user'])->names('user.brands');
Route::resource('/user/retailers', UserRetailerController::class)->middleware(['auth', 'role:user'])->names('user.retailers');

require __DIR__.'/auth.php';