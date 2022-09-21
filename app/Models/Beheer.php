<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beheer extends Model
{
    use HasFactory;

    protected $fillable = [
        'band_id',
        'user_id',
    ];

    protected $table = "beheer";


}
