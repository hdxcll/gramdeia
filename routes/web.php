<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    if(Auth::check()){
        return view('#', ['nama' => 'Hdxcll']);
    }else{
        return view('auth/login');
    }
});


//route mengarah ke halaman login di views/auth/login.blade.php
Route::get('/gramedia', function () {
    return view('auth/login');
});

//route untuk proses login
Route::post('/authenticate','App\Http\Controllers\AuthController@authenticate');

//route untuk logout
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('blog/home', ['nama' => 'Hdxchll']);
});
Route::get('/kontak', function () {
    return view('blog/kontak');
});
Route::get('/tentang', function () {
    return view('blog/tentang');
});
Route::get('/ktambah', function () {
    return view('blog/ktambah');
});

Route::get('/p2', function () {
    return view('blog/p2');
});
Route::get('/buku','App\Http\Controllers\BukuController@index');

Route::post('/buku/tambah','App\Http\Controllers\BukuController@tambah_buku');
Route::post('/buku/update','App\Http\Controllers\BukuController@update');

Route::get('/buku/edit/{id}','App\Http\Controllers\BukuController@edit');
Route::post('/buku/delete/{id}','App\Http\Controllers\BukuController@delete');