<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function redirectGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            [
                'email' => $googleUser->getEmail()
            ],
            [
                'roles_id' => 2,
                'name' => $googleUser->getName(),
                'avatar' => $googleUser->getAvatar(),
                'google_id' => $googleUser->getId(),
                'password' => bcrypt(Str::password(12))
            ]
        );

        Auth::login($user, true);

        if ($user->roles_id == 1) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('index');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
