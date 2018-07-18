<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
		return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {	// auth facade->gebruik de huidige user->heeft een relatie tot de functie comments ->sla een nieuwe comment op.
        \Auth::user()->comments()->save(

    	new Comment([


    	'body' => $body,
    	'post_id' => $this->id,

    	]));

    	// $this->comments()->ceate(['body'=> $body]);
    	//$this->comments()->ceate(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {

            if ($month = $filters['month']) {
                $query->whereMonth('created_at', Carbon::parse($month)->month);
            }


            if ($year = $filters['year']) {
                $query->whereYear('created_at', $year);
            }

    } 

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getPosterUserName()
    {
        return User::where('id', $this->user_id)->first()->name;
    }

      public function getCommenterUserName()
    {
        return User::where('id', $this->user_id)->first()->name;
    }

    public function path()
    {
        return "/posts/" . $this->id;

    }

    public function getSummary()
    {

      return substr($this->body, 0, 100);

    }

}
