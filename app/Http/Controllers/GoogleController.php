<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Str;
use Laravel\Socialite\Facades\Socialite;

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
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'remember_token' => Str::random(10),
                ]);
                Auth::login($new_user);
                return redirect('home');
            }
            
        } catch (\Throwable $th) {
           abort(404);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
