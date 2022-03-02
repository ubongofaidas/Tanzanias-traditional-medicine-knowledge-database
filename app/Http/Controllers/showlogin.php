<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showlogin extends Controller
{
    public function show() 
    {
        return view('login');
    }
}
