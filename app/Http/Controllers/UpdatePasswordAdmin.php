<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class UpdatePasswordAdmin extends Controller
{
    //
    public function index()
    {
        $id = Auth::id();
        $admin = User::find($id);

        return view('admin.gantipw',[
            'admin'=>$admin
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required',
        ]);
  
        $id = Auth::id();
        $user = User::find($id);
  
        if (!Hash::check($request->currentPassword, $user->password) || $request->newPassword !== $request->confirmPassword) {
            return back()->with('error', 'Password tidak sesuai');
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();

        return back()->with('success', 'Password berhasil diubah');


            
    }
}
