<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController
{
    public function index()
    {
        $posts = Post::get(); // Asume que posts será la tabla ya que el modelo se llama Post en singular

        return view('blog', ['posts' => $posts]);
    }
}
