<?php

namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts {
  // this can be a collection of sorts
  
  // what if a class needs to depend upon another class
  // in order for posts to do its job, what do we need
  // create a Redis class
  
  // protected property
  protected $redis;
  
  public function __construct(Redis $redis) {
    $this->redis = $redis;
  } 
  
  public function all() {
      // return all relevant posts
      return Post::all();
  }
}