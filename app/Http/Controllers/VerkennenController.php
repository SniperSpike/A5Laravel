<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;
use Illuminate\Support\Facades\DB;


class VerkennenController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $keyword = $request->keyword;

        if (isset($keyword)) {
            $band = Band::search($keyword);
        } else {
            $band = Band::all();
        }

        // $bands = Band::where([
        //     ['bandnaam', '!=', Null],
        //     [function ($query) use ($request) {
        //         if(($term = $request->term)) {
        //             $query->orWhere('bandnaam', 'LIKE', '%' . $term . '%')->get();
        //         }
        //     }]
        // ])

        // return view('verkennen', compact('band'),['bands' => $band]);
        return view('verkennen', compact('band'),['bands' => $band]);
    }
}
