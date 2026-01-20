<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->latest('published_at')->paginate(9);
        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Assuming ID or Slug. For resource route default, it's ID.
        // In real app, we'd use slug binding.
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
