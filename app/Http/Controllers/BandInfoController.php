<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandInfoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('bandinfo');
    }

    public function getBandInfo($id)
    {
        $band = DB::table('bands')->get()->where('id', '=', $id);
        if(count($band) != 0){
            return view('bandinfo', ["band"=> $band]);
        }else{
            return redirect('verkennen');
        }
    }
}
