<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\RequiresSetting;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        // $single_post=Post::find($postId);
        // $single_post=Post::where('id',$postId)->first();
        // $single_post=Post::where('id',$postId)->get();
        // if(is_null($single_post)){
        //     return to_route('posts.index');
        // }
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // $post = new Post;
        // $post->title = request()->title;
        // $post->description = request()->desc;
        // $post->save();
        Post::create([
            'title' => request()->title,
            'description' => request()->desc,
        ]);

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $post->update([
            'title' => request()->title,
            'description' => request()->desc,
        ]);
        return to_route('posts.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index');
    }
}
