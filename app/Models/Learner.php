<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Learner extends User {

    /*
     * Relationships
     */

	// Learner __has_one__ Teacher
    public function teacher()
    {
        return $this->hasOne('Teacher')->withTimestamps();
    }

    public function user(){
        return $this->morphOne('App\Models\User','userable');
    }
}


