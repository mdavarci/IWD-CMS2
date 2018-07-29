<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    // Nieuwe comment wordt opgeslagen en er wordt gecontroleerd of er wel iets wordt ingevuld.
	 public function store (Post $post)
	{
		$this->validate(request(), ['body'=>'required']);
		$post->addComment(request('body'));

		return back();
	}

	// comment wordt geupdate, voor als iemand zijn comment wil veranderen.
	 public function update ($post_id, Comment $comment)
	{

			$this->validate(request(),[
				'body' => 'required'
			]);


			$comment->update(request([
				'body']));

		   return redirect()->back();
	}

	// comment wordt verwijderd.

	public function destroy($post_id, Comment $comment)
    {
       

        $comment->delete();
        return redirect()->back();



    }


}