<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerkennenController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // LATER VOOR DATABASE 

        // $search = request()->query('search');

        // if($search) {
        //     $posts = Post::where('title', 'LIKE', "%{$search}%")->simplePaginate(3);
        // } else {
        //     $posts = Post::simplePaginate(3);
        // }
        return view('verkennen');
    }
}
