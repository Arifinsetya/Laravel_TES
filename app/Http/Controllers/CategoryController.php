<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index ()
    {
        return view('posts',[
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show ( Post $post)
    {
        return view('post',[
            "title" => "Single post",
            "post" => $post
            
        ]);
    }
}
