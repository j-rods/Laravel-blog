<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // this is a controller action
    public function index()
    {
        // load a view that will be in a posts folder and will have a name that corresponds to the action
        return view('posts.index');
    }
    
    public function show()
    {
        return view('posts.show');
    }
    
    public function create() {
        return view('posts.create');
    }
    
}
