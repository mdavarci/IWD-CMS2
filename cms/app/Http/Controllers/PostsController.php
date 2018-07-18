<?php

namespace App\Http\Controllers;


use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{


	public function __construct()
	{

		$this->middleware('auth', ['except' => 'destroy']);
	}

	public function index ()
	{
			

        if (empty(request(['month', 'year']))) {
            $posts = Post::latest()->get();

            return view('posts.index', compact('posts'));
        }

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));


	}
 
    public function create ()
	{
		   return view('posts.create');

	}

	  public function show ($id)
	{
			$post = Post::find($id);
		   return view('posts.show', compact('post'));

	}

	 public function store ()
	{

			$this->validate(request(),[

				'title' => 'required',
				'body' => 'required'

			]);

			auth()->user()->publish(
				new Post(request(['title', 'body']))
			);


		// 	Post::create([
		// 	'title' => request('title'),
		// 	'body' => request('body'),
		// 	'user_id' => auth()->id()
		// ]);

		   return redirect('/');
	}


		 public function edit ($id)
	{

				$post = Post::find($id);
		   return view('posts.edit', compact('post'));
	}

	 public function update ($id)
	{

				$post = Post::find($id);

				$this->validate(request(),[

				'title' => 'required',
				'body' => 'required'

			]);


			$post->update(request([

				'title',
				'body']));

		// $post->update([ 'title' => request('title'), 'body' => request('body') ]);


		   // return view('posts.edit', compact('post'));
			return redirect()->back();
	}

}
