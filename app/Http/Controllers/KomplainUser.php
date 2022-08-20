<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomplainUser extends Controller
{
    //
    public function index()
    {
        return view('user.ajukan_komplain_pembelian');
    }
}
