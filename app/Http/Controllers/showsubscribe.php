<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Validator;

class showsubscribe extends Controller
{
    public function show() 
    {
        return view('subscribe');
    }
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/(0)[0-9]{9}/',
        ]);

        if ($validator->fails()) {
            return response()->json([
               'errors' => ['phone' => $validator->errors()->all()]
            ]);
        }
        
        $subscribe = new Subscribe;
        $subscribe->phone = $request->phone;

        $subscribe->save();
        
        return response()->json([
            'success' => true, 'message' => 'subscription has been sent successfully!'
        ]);
        
    }
}
