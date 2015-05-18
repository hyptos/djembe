<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $fillable = ['name', 'email','password','teach'];
    protected $hidden = [ 'password' ];

    public function stats()
    {
        return $this->hasMany('App\Models\Stats');
    }

    public function teachTo(){
        return $this->belongsToMany('App\Models\Enseigne', 'enseigne', 'learner_id', 'teacher_id')->withPivot('App\Models\User', 'learner_id');
    }

    public function learnFrom(){
        return $this->belongsToMany('App\Models\Enseigne', 'enseigne', 'teacher_id', 'learner_id')->withPivot('App\Models\User', 'teacher_id');
    }
}
