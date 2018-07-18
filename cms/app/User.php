<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {

        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function publish(Post $post)
    {

        $this->posts()->save($post);
    }

    public function getAuthPassword() {
        return $this->password;
    }

     public function menus()
    {
        return $this->belongsToMany('App\Menu');
    }

     public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function hasRole($roleName)
    {
         foreach($this->roles as $role)
         {  
            if($role->role == $roleName){
                return true;
            }
         } 
         return false;

    }




}

