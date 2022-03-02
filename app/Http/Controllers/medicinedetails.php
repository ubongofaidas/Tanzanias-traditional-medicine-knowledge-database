<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class medicinedetails extends Controller
{
    public function show($slug)
    {   
       $medicine = DB::table('medicines')->where('id', $slug)->first();
       $other = DB::table('medicines')->Where('id', '!=', $slug)->orderBy('id', 'DESC')->get();

       $array = ['medicine' => $medicine, 'other' => $other];

       return view('details')->with($array);
    }

}
