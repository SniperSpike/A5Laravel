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
        'url1',
        'url2',
        'url3',
        'banner',
    ];
}
