<?php

namespace App;

class Post extends Model
{
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    // write the add comment function and accept the body of the comment
    public function addComment($body) {
      Comment::create([
        'body' => $body,
        'post_id' => $this->id
      ]);
    }
}
