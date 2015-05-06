<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $fillable = ['name', 'email','password'];
    protected $hidden = [ 'password' ];

    public function stats()
    {
        return $this->hasMany('App\Models\Stats');
    }

    public function cours()
    {
        return $this->hasMany('App\Models\Cours');
    }
}

class Learner extends User {

}

class Teacher extends User {

}

