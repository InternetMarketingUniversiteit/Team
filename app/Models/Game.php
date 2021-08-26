<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
    ];

    protected $casts = [
        'number_of_teams'    => 'integer',
        'min_users_per_team' => 'integer',
        'max_users_per_team' => 'integer',
    ];
}
