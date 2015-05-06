<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ImageExo extends Model {
    protected $fillable = ['difficulte','contenuATrou','resultat','indice'];

    public function exercices(){
        return $this->hasMany('App\Models\Exercice');
    }

}
