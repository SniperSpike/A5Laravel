<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        return view('auth.settings')->with('user', auth()->user());
    }

    public function updateForm(Request $req){
        if (Auth::check()) {
            if(!empty($req->input('username')) && !empty($req->input('email'))){
                $user = Auth::user();
                $user->name = $req->input('username');
                $user->email = $req->input('email');
                $user->save();
            }
        }
        return view('auth.settings')->with('user', auth()->user());
    }
}
