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

            auth()->user()->publish(
                new Page(request(['title', 'body']))
            );


        //  Post::create([
        //  'title' => request('title'),
        //  'body' => request('body'),
        //  'user_id' => auth()->id()
        // ]);

           return redirect('/');
    }


         public function edit ($id)
    {

                $pages = Page::find($id);
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

        // $post->update([ 'title' => request('title'), 'body' => request('body') ]);


           // return view('posts.edit', compact('post'));
            return redirect()->back();
    }
}
