<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiUser extends Controller
{
    //
    public function index()
    {
        return view('user.transaksi_user');
    }
}
