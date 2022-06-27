<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

use App\Category;
use App\Tag;
use App\Post;


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

        if(isset($keyword)) {
            $bands = Band::bandSearch($keyword);
        }
        else {
            $bands = Band::all();
        }
        return view('verkennen', compact('bands'));
    }
}
