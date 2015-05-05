<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'users';
    protected $type = NULL;
    protected $fillable = [
        'name',
        'username',
        'email',
        'password'
    ];
    protected $hidden = [ 'password' ];


    /*
     * Relationships
    */
    public function userable(){
        return $this->morphTo();
    }
}


