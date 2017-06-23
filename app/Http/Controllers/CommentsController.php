<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    // Receive the post
    public function store(Post $post) {
      $post->addComment(request('body'));
      return back(); // helper function that returns user to the previous page
    }
}
