<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Carbon\Carbon;


class PostsController extends Controller {
    public function __construct() {
      $this->middleware('auth')->except(['index', 'show']);
    }
    // this is a controller action
    public function index() {
        // render stored posts
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
          ->groupBy('year', 'month')
          ->orderByRaw('min(created_at) desc')
          ->get()
          ->toArray();
          
        if ($month = request('month')) {
          $posts = Post::whereMonth('created_at', Carbon::parse($month)->month)->get(); //march => 3, may => 5
        }
        
        // dd($posts);
        
        if ($year = request('year')) {
          $posts = Post::whereYear('created_at', Carbon::parse($year)->year)->get();
        }
        
        // load a view that will be in a posts folder and will have a name that corresponds to the action
        return view('posts.index', compact('posts', 'archives'));
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
