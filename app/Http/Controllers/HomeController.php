<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function Home()
    {
        // get the active blogs with published dateis past for today and sort by latest published date
        $blogs = Blog::where('is_published', true)
            ->where('publish_at', '<=', now())
            ->orderBy('publish_at', 'desc')
            ->get();
            
        return view('home' , compact('blogs'));
    }

    //show function using the blog
    public function show(Blog $blog)
    {
        return view('blogsshow', compact('blog'));
    }
}
