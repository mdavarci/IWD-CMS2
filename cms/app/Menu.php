<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function elements()
    {
    	$this->hasMany('App\Posts');

    	foreach($menu->elements as $element) {
    		$element->name;
    	}
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }


}
