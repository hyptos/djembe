<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'Users';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'username',
        'email',
        'password'
    ];
    protected $hidden = [ 'password' ];
}


