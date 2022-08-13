<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EditAvatarUser extends Controller
{
    //
    public function update(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);

        $validateData = $request->validate([
            'avatar'    => '|file|image|max:2000',
        ]);

        $extFile = $request->avatar->getClientOriginalExtension();
        $namaFile = time() . "." . $extFile;
        $request->avatar->move('img', $namaFile);
        $user->avatar = $namaFile;
        
        $user->update();

        return redirect()->route('account.index');
    }
}
