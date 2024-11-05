<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }
    
    public function create(Request $request)
    {
        $this->authorize('create', Post::class);

        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
        return response()->json($post, 201);
    }
}