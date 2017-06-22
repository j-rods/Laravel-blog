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
        //end execution and then dump all the request data to the page
        // dd(request()->all()); 
        // create a new post using the request data
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        // save it to the database
        $post->save();
        // Redirect to home page
        return redirect('/');
    }
    
}
