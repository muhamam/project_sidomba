<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountUser extends Controller
{
    //
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);

        return view('user.profil',[
            'user'=>$user
        ]);
    }
}
