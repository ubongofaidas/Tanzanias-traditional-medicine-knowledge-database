<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class browsemedicines extends Controller
{
    public function show() 
    {
        $browse = DB::table('medicines')->orderBy('id', 'DESC')->paginate(7);
        return view('browse', compact('browse'));
    }

    public function showajax(Request $request)
    {
        if($request->ajax())
        {
            $browse = DB::table('medicines')->orderBy('id', 'DESC')->paginate(7);
            return view('bmd', compact('browse'))->render();
        }
    }
}
