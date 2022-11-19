<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::All();
        return view ('blog.index',compact('posts'));
    }
}
