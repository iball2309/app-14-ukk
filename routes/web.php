<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

