<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UpdateProfileAdmin extends Controller
{
    //
    public function index()
    {
        $id = Auth::id();
        $admin = User::find($id);

        return view('admin.updateprofil',[
            "admin"=>$admin
        ]);
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        $admin = User::find($id);

        $validateData = $request->validate([
            'username'  => 'required|',
            'fullname'  => 'required',
            'email'     => '',
            'no_HP'     => 'required|numeric|',
            'avatar'    => '|file|image|max:2000',
        ]);

        if ($request->avatar !== null) 
        {
            $extFile = $request->avatar->getClientOriginalExtension();
            $namaFile = time() . "." . $extFile;
            $request->avatar->move('image', $namaFile);
            $admin->avatar = $namaFile;
        }
        $admin->username = $validateData['username'];
        $admin->fullname = $validateData['fullname'];
        $admin->no_HP = $validateData['no_HP'];
        
        $admin->update();

        return redirect()->route('accountAdmin.index');
    }
}
