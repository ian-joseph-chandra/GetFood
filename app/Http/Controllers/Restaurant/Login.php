<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'email|required|string',
            'password' => 'required',
        ]);

        $user = $request->only('email', 'password');
        $remember = $request->input('remember');

        if (Auth::attempt($user)) {
            if (!empty($remember)) {
                session(['email' => $request->only('email')]);
                session(['password' => $request->only('password')]);
            }

            return redirect('/restaurant/home');
        }

        return redirect('/restaurant/login')->with('flash_message_error', 'Invalid Username or Password');
    }
}
