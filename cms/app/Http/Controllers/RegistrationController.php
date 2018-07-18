<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
      public function create()
    {
    	return view('registration.create');
    	
    }

     public function store()
    {
    	$this->validate(request(), [

    	'name' => 'required',
    	'email' => 'required|email',
    	'password' => 'required|confirmed'
    	]);

        $data = request(['name', 'email', 'password']);

        $data['password'] = \Hash::make($data['password']);

    	$user = User::create($data);

    	auth()->login($user);

    	return redirect()->home();
    	
    }
}
