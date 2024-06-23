<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showPosts()
    {
	$posts = Post::all();
        return view('posts.index',  compact('posts'));
    }
}
