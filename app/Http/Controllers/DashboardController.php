<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $beheer = DB::table('beheer')
        ->where('beheer.user_id', auth()->user()->id)
        ->join('bands', 'beheer.band_id', '=', 'bands.id')
        ->join('users', 'beheer.user_id', '=', 'users.id')
        ->get();

        return view('auth.dashboard', ['bands' => $beheer]);
    }

}
