<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    // this is a controller action
    public function index() {
      
        // render stored posts
        $posts = Post::all();
        
        // load a view that will be in a posts folder and will have a name that corresponds to the action
        return view('posts.index', compact('posts'));
    }
    
    public function show() {
        return view('posts.show');
    }
    
    public function create() {
        return view('posts.create');
    }
    
    public function store() {
        // form validation
        $this->validate(request(), [
          'title' => 'required',
          'body' => 'required'
        ]);
        
        // create a new post using the request data
        Post::create(request(['title', 'body']));
        // Redirect to home page
        return redirect('/');
    }
    
}
