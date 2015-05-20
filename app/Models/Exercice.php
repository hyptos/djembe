<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model {
	protected $table = 'exercices';
    protected $fillable = ['type', 'difficulte', 'temps_moyen', 'nbReponses'];

    public function imageExos()
    {
        return $this->hasMany('App\Models\ImageExo');
    }

    public function questionnaireExo(){
        return $this->hasMany('App\Models\QuestionnaireExo');
    }

}
