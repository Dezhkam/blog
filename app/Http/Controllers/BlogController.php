<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        //$posts = Post::with('author')->orderBy('created_at','desc')->get();
        $posts = Post::with('author')->latestFirst()->paginate(3);
        return view ('blog.index',compact('posts'));
    }
}