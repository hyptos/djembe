<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model {
    protected $fillable = ['titre','difficulte'];

    public function chapitre()
    {
        return $this->hasMany('App\Models\Chapitre');
    }

    public function stats()
    {
        return $this->hasMany('App\Models\Stats');
    }

}
