<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function post()
    {

    	return $this->belongsTo(Post::class);

    }


     public function user()
    {

    	return $this->belongsTo(User::class);

    }

    public function path()
    {
        return "comments/" . $this->id;

    }

        public function getCommenterUserName()
    {
        return User::where('id', $this->user_id)->first()->name;
    }


}
