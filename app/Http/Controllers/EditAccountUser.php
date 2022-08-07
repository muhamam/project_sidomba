<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditAccountUser extends Controller
{
    //
    public function index()
    {
        return view('user.edit_profil');
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);

        $validateData = $request->validate([
            'fullname'  => 'required|',
            'birth_date'  => 'required',
            'gender'     => 'required',
        ]);

        $user->fullname = $validateData['fullname'];
        $user->birth_date = $validateData['birth_date'];
        $user->gender = $validateData['gender'];
        
        $user->update();

        $request->session()->flash('pesan');
        return redirect()->route('editaccount.index');
    }
}
