<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;


class PostsController extends Controller {
    public function __construct() {
      $this->middleware('auth')->except(['index', 'show']);
    }
    // this is a controller action
    // automatic dependency injection: ask for an instance of Post, return all $posts
    public function index(Posts $posts) {
        // render stored posts from the repository
        $posts = $posts->all();
       
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
