<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        $posts = Post::get(); // Asume que posts será la tabla ya que el modelo se llama Post en singular

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post) // Uso de Type hints pasándole clase Post
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return to_route('posts.index');
    }
}
