<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model {
	protected $table = 'exercices';
    protected $fillable = ['type', 'difficulte', 'ressource', 'script', 'temps_moyen', 'nbReponses'];

    public function imageExos()
    {
        return $this->hasMany('App\Models\ExerciceImageExo');
    }

    public function questionnaireExo(){
        return $this->hasMany('App\Models\QuestionnaireExo');
    }

}
