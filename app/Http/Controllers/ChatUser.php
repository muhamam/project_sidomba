<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatUser extends Controller
{
    //
    public function index()
    {
        return view('user.chat_user');
    }
}
