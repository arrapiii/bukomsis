<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function siswa() {

        $data = Siswa::all();
        return view('datasiswa', compact('data'));
    }

    public function inpsiswa() {
        return view('inputsiswa');
    }
}
