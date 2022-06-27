<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {   
        $band = DB::table('bands')->get();
        return view('verkennen', ['band' => $band]);
    }
}
