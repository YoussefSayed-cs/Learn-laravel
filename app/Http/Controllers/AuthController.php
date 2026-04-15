<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController
{
    // signup(GET) , signup(POST) , login(GET) , login(POST) , logout(POST)

    public function ShowsignupForm()
    {
        return view('auth.signup' , ['title' => 'Signup']);
    }

    public function signup(Request $request)
    {
        // Implementation for signup
    }

    public function ShowloginForm()
    {
        return view('auth.login' , ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        // Implementation for login
    }

    public function logout()
    {
        // Implementation for logout
    }
}
