<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{

    protected $fillable = ['year', 'position', 'name', 'email', 'is_active'];

    use HasFactory;
}
