<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
        "title" => "Blog",
        // "posts" => Post::all()
        
        // Mengurutkan Post dari yang paling terbaru, kalo di Post:all() diurutkan berdasarkan id
        "posts" => Post::latest()->get()
      ]);
    }

    public function show(Post $post)
    {
        return view('post', [
        "title" => "Single Post",
        "post" => $post
    ]);
    }


}
