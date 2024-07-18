<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CricketTeam extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    use HasFactory;
}
