<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistUser extends Controller
{
    //
    public function index()
    {
        return view('user.wishlist_pembeli');
    }
}
