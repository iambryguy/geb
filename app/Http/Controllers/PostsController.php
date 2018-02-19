<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->first();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store()
    {
        // 1. Validate your content
        $this->validate(request(),[
            'title' => 'nullable|string',
            'body'  => 'nullable|string'
        ]);
        // 2. Create a new post using the request data... I am also doing 3. Saving to the db.
        Post::create(request(['title', 'body']));
        // 4.  Redirect to the home page
        return redirect('/');
    }
}
