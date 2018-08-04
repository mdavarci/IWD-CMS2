<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Page extends Model
{
     protected $fillable = ['title', 'body', 'place'];

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

    public function path()
    {
        return "/pages/" . $this->id;

    }

}
