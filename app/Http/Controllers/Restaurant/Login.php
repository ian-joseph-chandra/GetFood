<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{

    public function getLogin(Request $request)
    {
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'email|required|string',
            'password' => 'required',
        ]);

        // $parameter = new Restaurant([
        //     'email' => $request->only('email'),
        //     'password' => $request->only('password')
        // ]);

        // $restaurant = (new RestaurantController)->show($parameter);

        // return $restaurant;

        $user = $request->only('email', 'password');
        $remember = $request->input('remember');

        if (Auth::attempt($user)) {
            if (!empty($remember)) {
                session(['email' => $request->only('email')]);
                session(['password' => $request->only('password')]);
            }

            return redirect('/restaurant/home');
        }

        return redirect('/restaurant/home')->with('flash_message_error', 'Invalid Username or Password');
    }
}
