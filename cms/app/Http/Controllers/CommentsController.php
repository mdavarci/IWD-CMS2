<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    
	 public function store (Post $post)
	{
		$this->validate(request(), ['body'=>'required']);
		$post->addComment(request('body'));

		return back();
	}

	 public function update ($post_id, Comment $comment)
	{

			$this->validate(request(),[
				'body' => 'required'
			]);


			$comment->update(request([
				'body']));

		// $post->update([ 'title' => request('title'), 'body' => request('body') ]);


		   return redirect()->back();
	}


}