<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(/*Request $request,*/ $email, $password)
    {
//        error_log("insert the session");
//        $request->session()->put('key', $username);

//        if ($request->session()->has($username)) {
        return redirect('/home')->withCookies([
            'email' => $email,
            'password' => $password]);
//        }

//        return redirect('/login');
    }
}
