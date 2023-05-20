<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;

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


Route::get('/input', function () {
    return view('inputguru');
});

Route::get('/inputt', function () {
    return view('inputsiswa');
});

Route::get('/guruu', function () {
    return view('dataguru');
});

Route::get('/inputguru', function () {
    return view('inputguru');
});

Route::get('/siswaa', [SiswaController::class, 'siswa']);

Route::get('/inputsiswa', [SiswaController::class, 'inpsiswa']);

Route::get('/guruu', [GuruController::class, 'guru']);

Route::get('/inputguru', [GuruController::class, 'inpguru']);