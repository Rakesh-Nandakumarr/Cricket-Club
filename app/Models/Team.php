<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'sport_id'];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
    use HasFactory;
}
