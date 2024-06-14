<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // $posts = Post::all();
        // $posts = Post::with('category', 'tags', 'user')->get();

        // $per_page = $request->perPage ?? 12;
        $results = Post::with('category', 'tags', 'user')->paginate(9);

        return response()->json([
            // 'posts' => $posts,
            'results' => $results
        ]);
    }

    public function show(Post $post)
    {

        $post->load('category', 'tags', 'user');

        return response()->json([
            'post' => $post
        ]);
    }
}
