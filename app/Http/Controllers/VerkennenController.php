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
        return view('verkennen');

        if(request()->query('search')) {
            dd(request()->query('search'));
        }
    }
}
