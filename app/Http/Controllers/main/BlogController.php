<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\main\Blog;

class BlogController extends Controller
{
    public function blog($slug)
    {
        $blog = Blog::where('blog_slug', $slug)->first();

        if(!$blog){
            return redirect('/')->with('error', 'oops');
        }
        return view('main.blog.blog', compact('blog'));
    }

    public function blogs()
    {
        $data['blog'] = Blog::orderBy('id', 'DESC')->paginate(8);
        return view('main.blog.blogs', compact('data'));
    }
}
