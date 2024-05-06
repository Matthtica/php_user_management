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
        return view('posts.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $attrs = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
        ]);

        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $attrs['title'],
            'content' => $attrs['content'], ]);
        // redirect
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $attrs = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
        ]);

        $user_id = auth()->user()->id;
        if ($user_id == $post->user_id) {
            $post->update($attrs);
            return redirect('/posts/' . $post->id);
        } else {
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
