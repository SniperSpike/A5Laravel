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

    // in samenwerking met Stack Overflow
    private function getYoutubeEmbedUrl($url)
    {
         $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
         $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';
    
        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
    
        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        return 'https://www.youtube.com/embed/' . $youtube_id ;
    }

    public function submitForm(Request $req){
        Band::create([
            'bandnaam' => $req->input('bandNaam'),
            'biografie' => $req->input('biografie'),
            'tekstkleur' => $req->input('textKleur'),
            'achtergrondkleur' => $req->input('achtergrondKleur'),
            'themakleur' => $req->input('themaKleur'),
            'url1' => $this->getYoutubeEmbedUrl($req->input('video1')),
            'url2' => $this->getYoutubeEmbedUrl($req->input('video2')),
            'url3' => $this->getYoutubeEmbedUrl($req->input('video3')),
            'banner' => $req->input('base64data'),
        ]);
        return redirect('dashboard');
    }

    public function updateForm(Request $req){
        $data = Band::find($req->id);
        $data->bandnaam = $req->input('bandNaam');
        $data->biografie = $req->input('biografie');
        $data->tekstkleur = $req->input('textKleur');
        $data->achtergrondkleur = $req->input('achtergrondKleur');
        $data->themakleur = $req->input('themaKleur');
        $data->url1 = $this->getYoutubeEmbedUrl($req->input('video1'));
        $data->url2 = $this->getYoutubeEmbedUrl($req->input('video2'));
        $data->url3 = $this->getYoutubeEmbedUrl($req->input('video3'));
        $data->banner = $req->input('base64data');
        $data->save();
        return redirect("/edit/" . $data->id);
    }

    public function delete($id){
        $data = Band::find($id);
        $data->delete();
        return redirect('dashboard');
    }
}