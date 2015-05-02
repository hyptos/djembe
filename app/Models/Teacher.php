<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Teacher extends User {

	/*
     * Relationships
     */

	// Teacher __has_many__ Learner
    public function learners()
    {
        return $this->belongsToMany('Learner')->withTimestamps();
    }

    public function user(){
        return $this->morphOne('App\Models\User','userable');
    }
}


