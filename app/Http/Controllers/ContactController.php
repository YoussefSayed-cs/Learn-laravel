<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('contact' , ['title' => 'Contact Us']);
    }
}
