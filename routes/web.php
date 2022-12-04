<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SptController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SppdController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PegawaiController;

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
    return view('pages.dashboard');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// contact me
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
// crud
Route::resource('pegawai', PegawaiController::class);
Route::resource('sppd', SppdController::class);
Route::resource('spt', SptController::class);
Route::resource('biaya', BiayaController::class);
