<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create() {
        return view('sessions.create');
    }
    public function store() {
      // validate form
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
      ]);
       // create and save the user
       $user = User::create(request(['name', 'email', 'password']));
       // sign them in
       auth()->login($user);
       // redirect to the home page
       return redirect()->home();
    } 
}
