<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
    
    //query scopes
    public function scopeFilter($query, $filters) {
      if ($month = $filters['month']) {
          $query->whereMonth('created_at', Carbon::parse($month)->month)->get(); //march => 3, may => 5
        }
        
        if ($year = $filters['year']) {
          $query->whereYear('created_at', $year)->get();
        }
    }
    public static function archives() {
      // refactor archive into a view composer
      return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
          ->groupBy('year', 'month')
          ->orderByRaw('min(created_at) desc')
          ->get()
          ->toArray();
    }
}
