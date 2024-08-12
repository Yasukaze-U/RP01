<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use resourses\views\posts\index;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post){
        return view('posts.index')->with(['posts'=>$post->getByLimit()]);
    }
    
    public function show(Post $post){
        return view('posts.show')->with(['post'=>$post]);
    }
    
    public function create(){
        return view('posts.create');
    }
    
    public function store(PostRequest $request, Post $post){
        $input = $request["post"];
        $post->fill($input)->save();
        return redirect('/posts/'.$post->id);
    }
    
    public function edit(PostRequest $request, Post $post){
        return view('/posts/'.$post->id."edit")->with(["post"=>$post]);
    }
}

?>