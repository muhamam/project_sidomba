<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanUser extends Controller
{
    //
    public function indexBelumDiulas()
    {
        return view('user.ulasan_belum_diulas_pembelian');
    }

    public function indexSudahDiulas()
    {
        return view('user.ulasan_sudah_diulas_pembeli');
    }

    public function indexTulisUlasan()
    {
        return view('user.tulis_ulasan_pembeli');
    }


    
}
