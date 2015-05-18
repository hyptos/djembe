<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model {
    protected $fillable = ['nbExos'];

    public function chapitre()
    {
        return $this->hasOne('App\Models\Chapitre');
    }

    public function exercices()
    {
        return $this->hasMany('App\Models\Exercice');
    }

    public function questionnaireExo(){
        return $this->hasOne('App\Models\Exercice')
        	->withPivot('App\Models\QuestionnaireExo','questionnaire_id');
    }
}
