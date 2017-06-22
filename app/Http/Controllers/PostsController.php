<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    // this is a controller action
    public function index() {
        // load a view that will be in a posts folder and will have a name that corresponds to the action
        return view('posts.index');
    }
    
    public function show() {
        return view('posts.show');
    }
    
    public function create() {
        return view('posts.create');
    }
    
    public function store() {
        // create a new post using the request data
        $post = new Post;
        
        Post::create([
          'title' => request('title'),
          'body' => request('body')
        ]);

        // Redirect to home page
        return redirect('/');
    }
    
}
