<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')
                ->setHttpClient(new \GuzzleHttp\Client(['verify' => false])) // Disable SSL verification
                ->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = User::create([
                    'full_name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'role' => 'user' // Set default role to "user"
                ]);

                Auth::login($new_user);
                return redirect()->intended('/');
            } else {
                Auth::login($user);
                return redirect()->intended('/');
            }
        } catch (\Throwable $th) {
            dd('Something went wrong! ' . $th->getMessage());
        }
    }
}