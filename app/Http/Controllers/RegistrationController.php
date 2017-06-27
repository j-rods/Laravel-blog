<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create');
    }
    public function store(RegistrationRequest $request) {
      // validate form request = $request
      // if this does not validate, any of the below won't run

       // create and save the user
       $user = User::create([
         'name' => request('name'),
         'email' => request('email'), 
         'password' => bcrypt(request('password'))
         ]);
       // sign them in
       auth()->login($user);
       
       \Mail::to($user)->send(new Welcome($user));
       
       // redirect to the home page
       return redirect()->home();
    } 
}
