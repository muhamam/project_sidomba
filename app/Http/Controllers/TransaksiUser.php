<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiUser extends Controller
{
    //
    public function indexDiproses()
    {
        return view('user.transaksi_user');
    }

    public function indexMenungguPembayaran()
    {
        return view('user.transaksi_user_mp');
    }

    public function indexSelesai()
    {
        return view('user.transaksi_selesai_user');
    }
}
