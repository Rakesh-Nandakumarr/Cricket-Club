<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        // 'thumbnail',
        'start_date',
        'end_date',
        'keywords',
    ];

    use HasFactory;
}