<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Teacher extends User {
    public function enseigne(){
        return $this->hasOne('App\Models\User')->withPivot('App\Models\Enseigne', 'teacher_id');
    }
}

