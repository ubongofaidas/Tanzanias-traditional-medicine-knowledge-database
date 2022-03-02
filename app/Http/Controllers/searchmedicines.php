<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class searchmedicines extends Controller
{

    public function index(Request $request)
    {   
        $search_q = $request->input('srh');
        $high_light = '<strong>'.$request->input('srh').'</strong>';

        $search = DB::table('medicines')->select('id', 'scientific_name', 'description')
                    ->where("scientific_name","LIKE", '%'.$search_q.'%')
                    ->union(
                        DB::table('medicines')->select('id', 'local_name', 'description')
                            ->where("local_name","LIKE", '%'.$search_q.'%')
                        )
                    ->paginate(7);

        $total_records = DB::table('medicines')->select('id')
                    ->where("scientific_name","LIKE",'%'.$search_q.'%')
                    ->union(
                        DB::table('medicines')
                            ->select('id')
                            ->where("local_name","LIKE", '%'.$search_q.'%')
                    )
                    ->count();

        $array = ['search_q' => $search_q, 'high_light' => $high_light, 'search' => $search, 'total_records' => $total_records];

        return view('search')->with($array);
    }
  
    public function autocomplete(Request $request)
    {

        $search = DB::table('medicines')->select('id', 'scientific_name', 'description')
                    ->where("scientific_name","LIKE", "%".$request->input('srh')."%")
                    ->union(
                        DB::table('medicines')->select('id', 'local_name', 'description')
                            ->where("local_name","LIKE","%".$request->input('srh')."%")
                        )
                    ->get();

        $data = array(); 

        foreach($search as $sear)
        {
            $data[] = array("label" => $sear->scientific_name);
        }

        return response()->json($data);
    }
}
