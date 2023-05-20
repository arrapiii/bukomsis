<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('guru');
});

Route::get('/guru', function () {
    return view('tables');
});

Route::get('/siswa', function () {
    return view('tables1');
});

Route::get('/input', function () {
    return view('inputguru');
});

Route::get('/inputt', function () {
    return view('inputsiswa');
});

Route::get('/siswaa', function () {
    return view('datasiswa');
});

Route::get('/guruu', function () {
    return view('dataguru');
});

Route::get('/inputsiswa', function () {
    return view('inputsiswa');
});

Route::get('/inputguru', function () {
    return view('inputguru');
});
