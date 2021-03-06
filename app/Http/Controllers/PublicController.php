<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->paginate(2);
        return view('welcome', compact('posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactPost()
    {
        //
    }

    public function singlePost(Post $post)
    {
        return view('singlePost', compact('post'));
    }
}
