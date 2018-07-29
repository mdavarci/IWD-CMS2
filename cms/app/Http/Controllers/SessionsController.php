<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    // Zorgt ervoor dat gasten dit kunnen lezen.
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}

    // Maak sessie aan.
    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {

	    if	(! auth()->attempt(request(['email', 'password']))) {

	    	return back()->withErrors([
                'message' => 'Please check your credentials and try again.'


            ]);
	    }

	    	return redirect()->home();

	}

    // Vernietig huidige sessie van de geautoriseerde persoon.
     public function destroy()
    {
    	auth()->logout();

    	return redirect()->home();
    }
}
