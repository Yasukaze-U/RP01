<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use resourses\views\posts\index;

class PostController extends Controller
{
    public function index(Post $post){
        return view('posts.index')->with(['posts'=>$post->getByLimit()]);
    }
}
