<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public static function search($search) {
        return Band::where("bandnaam", 'LIKE', "%$search%");
    }
}
