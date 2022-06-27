<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
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
        return view('auth.create', ['band' => []]);
    }

    public function editBand($id){
        $band = DB::table('bands')->get()->where('id', '=', $id);
        return view('auth.edit', ['band' => $band]);
    }

    public function submitForm(Request $req){
        Band::create([
            'bandnaam' => $req->input('bandNaam'),
            'biografie' => $req->input('biografie'),
            'tekstkleur' => $req->input('textKleur'),
            'achtergrondkleur' => $req->input('achtergrondKleur'),
            'themakleur' => $req->input('themaKleur'),
            'url1' => $req->input('video1'),
            'url2' => $req->input('video2'),
            'url3' => $req->input('video3'),
            'banner' => $req->input('base64data'),
        ]);
        return redirect('dashboard');
    }
}