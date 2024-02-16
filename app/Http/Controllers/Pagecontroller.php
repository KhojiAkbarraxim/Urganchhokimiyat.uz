<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index')->with('posts',$posts);
    }
    public function news()
    {
        return view('news');
    }

}
