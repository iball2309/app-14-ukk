<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
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
Route::get('/book', function () {
    return view('book');
});
Route::get('/gadis_kretek', function () {
    return view('books.gadis_kretek');
});
Route::get('/buku', function () {
    return view('buku.book');
});
Route::get('/stock', function () {
    return view('buku.stock');
});
Route::get('/kategori', function () {
    return view('buku.kategori');
});
Route::get('/form-book', function () {
    return view('form.book');
});
Route::get('/form-kategori', function () {
    return view('form.kategori');
});
Route::get('/form-kategori-edit', function () {
    return view('form.kategori_edit');
});
Route::get('/form-stock', function () {
    return view('form.stock');
});
Route::get('/akun', function () {
    return view('akun.akun');
});
Route::get('/form-akun', function () {
    return view('form.akun');
});


Route::resource('kategori', KategoriController::class);
Route::resource('akun', UserController::class);