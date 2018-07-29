<?php

namespace App\Http\Controllers;

use App\Page;
use Carbon\Carbon;


class PagesController extends Controller
{
    // Door middleware wordt gecontroleerd of een persoon geautoriseerd is op te kijken.
    public function __construct()
    {

        $this->middleware('auth', ['except' => 'destroy']);
    }

    // Maak een 
    public function index ()
    {
            

        if (empty(request(['month', 'year']))) {
            $pages = Page::latest()->get();

            return view('pages.index', compact('pages'));
        }

        $pages = Page::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('pages.index', compact('pages'));


    }

    // Functie create voor pages.
 
    public function create ()
    {
           return view('pages.create');

    }

    // Functie show voor pages.

      public function show ($id)
    {
            $page = Page::find($id);
           return view('pages.show', compact('page'));

    }

    // Functie store voor pages.

     public function store ()
    {

            $this->validate(request(),[

                'title' => 'required',
                'body' => 'required'

            ]);

            auth()->user()->publishPage(
                new Page(request(['title', 'body']))
            );

           return redirect('/');
    }


     // Functie edit voor pages.
         public function edit ($id)
    {

                $page = Page::find($id);
           return view('pages.edit', compact('page'));
    }

    // Functie update voor pages.

     public function update ($id)
    {

                $page = Page::find($id);

                $this->validate(request(),[

                'title' => 'required',
                'body' => 'required'

            ]);


            $page->update(request([

                'title',
                'body']));

            return redirect()->back();
    }

    // Functie destroy voor pages.

    public function destroy ($id)
    {       
        $page = Page::find($id);
        $page->delete();
        

        return back();   
    }
}
