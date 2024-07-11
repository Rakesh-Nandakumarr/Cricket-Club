<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [ 'title', 'slug', 'teaser_image', 'banner_image', 'content', 'is_published', 'publish_at', 'created_at', 'updated_at', 'keywords' ];

    // make a get function for the image path both this teaser and this banner images bind it with the storage path
    public function getTeaserImage()
    {
        return asset('storage/' . $this->teaser_image);
    }

    public function getBannerImage()
    {
        return asset('storage/' . $this->banner_image);
    }



}
