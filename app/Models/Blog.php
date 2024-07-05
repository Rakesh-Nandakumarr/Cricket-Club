<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [ 'title', 'slug', 'teaser_image', 'banner_image', 'content', 'is_published', 'publish_at', 'created_at', 'updated_at', 'keywords' ];


}
