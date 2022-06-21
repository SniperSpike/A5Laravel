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

        if(request()->query('query')) {
            dd(request()->query('query'));
        }
        return view('verkennen');
    }
}
