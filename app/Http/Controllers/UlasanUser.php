<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanUser extends Controller
{
    //
    public function index()
    {
        return view('user.ulasan_belum_diulas_pembelian');
    }
}
