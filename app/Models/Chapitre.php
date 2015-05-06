<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model {
    protected $fillable = ['nbChapitre','contenuEditable'];

    public function cours()
    {
        return $this->hasOne('App\Models\Cours');
    }

    public function questionnaire()
    {
        return $this->hasOne('App\Models\Questionnaire');
    }

}
