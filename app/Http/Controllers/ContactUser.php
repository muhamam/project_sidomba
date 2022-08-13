<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactUser extends Controller
{
    //
    public function index()
    {
        return view('user.edit_kontak');
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);

        $validateData = $request->validate([
            'no_HP'  => 'required|numeric',
        ]);

        $user->no_HP = $validateData['no_HP'];
        
        $user->update();

        $request->session()->flash('pesan');
        return redirect()->route('contact.index');
    }
}
