<?php

namespace App\Http\Controllers;

use App\Page;
use Carbon\Carbon;


class PagesController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth', ['except' => 'destroy']);
    }

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
 
    public function create ()
    {
           return view('pages.create');

    }

      public function show ($id)
    {
            $page = Page::find($id);
           return view('pages.show', compact('page'));

    }

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


         public function edit ($id)
    {

                $page = Page::find($id);
           return view('pages.edit', compact('page'));
    }

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
}
