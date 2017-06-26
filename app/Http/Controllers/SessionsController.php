<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //set up middleware filter for guest, so only guests can get through
    public function __construct() {
      $this->middleware('guest', ['except' => 'destroy']);
    }
    public function create() {
       return view('sessions.create');
    }
    public function destroy() {
      auth()->logout();
      return redirect()->home();
    }
    public function store() {
      // Attempt to authenticate user
      // If so, sign them in
      // If not, redirect back
      if (! auth()->attempt(request(['email', 'password']))) {
        return back()->withErrors([
          'message' => 'Please check your credentials and try again.'
        ]);
      }
      // Redirect to homepage
      return redirect()->home();
    }
}
