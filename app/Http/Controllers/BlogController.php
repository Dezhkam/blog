<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(){
        //$posts = Post::with('author')->orderBy('created_at','desc')->get();
        $categories = Category::with(['posts'=> function($query){
            $query->published();
        }])->orderBy('title','asc')->get();
        $posts = Post::with('author')->latestFirst()->published()->paginate(3);
        return view ('blog.index',compact('posts','categories'));
    }
    public function category(Category $category){
        //$posts = Post::with('author')->orderBy('created_at','desc')->get();
        $categories = Category::with(['posts'=> function($query){
            $query->published();
        }])->orderBy('title','asc')->get();
        $posts = Post::with('author')->where('category_id',$category->id)->latestFirst()->published()->paginate(3);
        return view ('blog.index',compact('posts','categories'));
    }
    public function show(Post $post){
        // die($post->body);
        $categories = Category::with(['posts'=> function($query){
            $query->published();
        }])->orderBy('title','asc')->get();
        return view('blog.show',compact('post','categories'));
    }
}