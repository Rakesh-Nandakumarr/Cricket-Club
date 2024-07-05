<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Define the relationship between the Role and User models many to many
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}


