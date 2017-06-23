<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    // Receive the post
    public function store(Post $post) {
      
      Comment::create([
        'body' => request('body'),
        'post_id' => $post->id 
      ]);
      
      return back(); // helper function that returns user to the previous page
    }
}
