<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create');
    }
    public function store(RegistrationRequest $request) {
      // validate form request = $request
      // if this does not validate, persist won't run
      $request->persist();
      // redirect to the home page
      return redirect()->home();
    } 
}
