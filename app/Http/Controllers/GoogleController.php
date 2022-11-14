<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    public function login()
    {
        # code...
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        # code...
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('email',$google_user->email)->first();
            if ($user) {
                Auth::login($user);
                return redirect('home');
            } else {
                $temp_username = explode(" ",$google_user->name);
                $username = $temp_username[0].rand(10,199);
                $new_user = User::create([
                    'avatar'=> $google_user->getAvatar(),
                    'username' => $username,
                    'fullname' => ucwords($google_user->name),
                    'email' => $google_user->email,
                    'email_verified_at' => now(),
                    'password' => '', // password
                    'remember_token' => Str::random(10),
                ]);
                Auth::login($new_user);
                return redirect('create-password');
            }
            
        } catch (\Throwable $th) {
           abort(404);
        }
    }

    public function indexCreatePassword()
    {
        return view('auth.CreatePassword');
    }

    public function CreatePassword(Request $request)
    {   

            $validator = Validator::make($request->all(), [
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
     
            if ($validator->fails()) {
                return redirect('create-password')
                            ->withErrors($validator)
                            ->withInput();
            }

            $id = Auth::id();
            $user = User::find($id);
            $user->password = Hash::make($request['password']);
            $user->save();

        return redirect('home');
    } 
        

        

        

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
