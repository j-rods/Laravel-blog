<?php

namespace App\Repositories;

use App\Post;

class Posts {
  //this can be a collection of sorts
  public function all() {
      // return all relevant posts
      return Post::all();
  }
}