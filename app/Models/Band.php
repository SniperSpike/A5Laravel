<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\VerkennenController;

class Band extends Model
{
    use HasFactory;

    protected $fillable = [
        'bandnaam',
        'biografie',
        'tekstkleur',
        'achtergrondkleur',
        'themakleur',
        'url1',
        'url2',
        'url3',
        'banner',
    ];

    public static function search($keyword) {
        return Band::where("bandnaam", 'LIKE', "%$keyword%");
    }
}
