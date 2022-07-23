<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountAdmin extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $admin = User::find($id);

        return view('admin.account',[
            "admin"=>$admin
        ]);
    }
}
