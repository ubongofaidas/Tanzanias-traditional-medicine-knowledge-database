<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class allmedicines extends Controller
{
    public function index() 
    {
        $medicines = DB::table('medicines')->orderBy('id', 'DESC')->get();
        return view('home', compact('medicines'));
    }

}
