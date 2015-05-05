<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $fillable = ['name', 'email','password'];
    protected $hidden = [ 'password' ];


    /*
     * Relationships
    */
    public function userable(){
        return $this->morphTo();
    }
}


