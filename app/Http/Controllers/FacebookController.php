<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function provider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function HandleCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $data = User::where('email', $user->email)->first();
        if (is_null($data)) {
            $users['full_name'] = $user->Name;
            $users['email'] = $user->email;
            $users['role'] = 'user';
            $data = User::create($users);
        }
        Auth::login($data);
        return redirect('/');
    }
}
