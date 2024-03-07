<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});
Route::resource('book', BukuController::class);
Route::get('/register-admin', function () {
    return view('auth.register_admin');
});
Route::get('/print', function () {
    return view('peminjaman.print');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('akun', UserController::class);
    Route::resource('buku', BookController::class);
    Route::resource('role', RoleController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('peminjaman', PeminjamanController::class);
});