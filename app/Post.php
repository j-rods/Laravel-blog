<?php

namespace App;

use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    // write the add comment function and accept the body of the comment
    public function addComment($body) {
      
      // because we already have a relationship with comment,
      // you can refactor using eloquent
      // $this->comments()->create(compact('body'));
      
      Comment::create([
        'body' => $body,
        'post_id' => $this->id,
        'user_id' => Auth::user()->id
      ]);
    }
    public function user() {
      return $this->belongsTo(User::class);
    }
    public function scopeFilter($query, $filter) {
      
    }
}
