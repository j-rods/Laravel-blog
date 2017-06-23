<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller {
    public function __construct() {
      $this->middleware('auth')->except(['index', 'show']);
    }
    // this is a controller action
    public function index() {
      
        // render stored posts
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        // load a view that will be in a posts folder and will have a name that corresponds to the action
        return view('posts.index', compact('posts'));
    }
    
    public function show(Post $post) {
        return view('posts.show', compact('post'));
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
        
        // Call a method on authenticated user object
        auth()->user()->publish(
          new Post(request(['title', 'body']))
        );
        // Redirect to home page
        return redirect('/');
    }
    
}
