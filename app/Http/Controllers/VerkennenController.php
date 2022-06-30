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
            $band = Band::search($keyword)->get();
        } else {
            $band = Band::all();
        }

        return view('verkennen', compact('band'),['bands' => $band]);
    }
}
