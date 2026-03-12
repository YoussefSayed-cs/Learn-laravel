<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('job' , ['title' => 'Job Board']);
    }
}
