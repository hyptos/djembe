<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model {
    protected $fillable = ['difficulte','contenuATrou','resultat','indice'];

    public function imageExos()
    {
        return $this->hasMany('App\Models\ImageExo');
    }

    public function questionnaireExo(){
        return $this->hasMany('App\Models\QuestionnaireExo');
    }

}
