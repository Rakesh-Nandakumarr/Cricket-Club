<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'jersey_number', 'team_id', 'photo', 'player_role', 'batting_style', 'bowling_style', 'is_active'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
