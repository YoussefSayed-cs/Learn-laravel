<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController
{
    /**
     * Handle the incoming request.J
     */
    public function __invoke(Request $request)
    {
        return view('about' , ['title' => 'About Us']);
    }
}
