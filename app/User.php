<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // protected $fillable = [
    //     'name', 
    //     'position', 
    //     'phone', 
    //     'image', 
    //     'user_id', 
    //     'description',
    //     'completed'
    // ];

    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
