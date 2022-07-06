<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;
use App\Models\Beheer;
use Illuminate\Support\Facades\DB;
use Auth;

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
        
        $beheer = DB::table('beheer')
        ->where('band_id', '=', $id)
        ->where('user_id', auth()->user()->id)
        ->get();

        if(count($beheer) > 0){
            return view('auth.edit', ['band' => $band]);
        }else{
            return redirect('dashboard');
        }
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
        $band = new Band;
        $band->bandnaam = $req->input('bandNaam');
        $band->biografie = $req->input('biografie');
        $band->tekstkleur = $req->input('textKleur');
        $band->achtergrondkleur = $req->input('achtergrondKleur');
        $band->themakleur = $req->input('themaKleur');
        $band->url1 = $this->getYoutubeEmbedUrl($req->input('video1'));
        $band->url2 = $this->getYoutubeEmbedUrl($req->input('video2'));
        $band->url3 = $this->getYoutubeEmbedUrl($req->input('video3'));
        $band->banner = $req->input('base64data');
        $band->library = $req->input('LibraryBase64data');
        $band->save();

        $beheer = new Beheer;
        $beheer->user_id = auth()->user()->id;
        $beheer->band_id = $band->id;
        $beheer->save();

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
        $data->library = $req->input('LibraryBase64data');
        $data->save();
        return redirect("/edit/" . $data->id);
    }

    public function delete($id){
        $data = Band::find($id);
        $data->delete();

        DB::table('beheer')
        ->where('band_id', '=', $id)
        ->delete();
        return redirect('dashboard');
    }

    // public function invite() {
    //     $user = User::where('email', '=', Input::get('email'))->first();

    //     if($user === null) {
    //         echo '<script type="text/javascript">';
    //         echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
    //         echo '</script>';
    //     }
    // }
}
