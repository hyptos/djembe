<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


use App\Models\Questionnaire;
use App\Models\Chapitre;

class Questionnaire extends Model {
    protected $table = 'questionnaires';
    protected $fillable = ['nbExos'];

    public function chapitres()
    {
        return $this->hasOne('App\Models\Chapitre');
    }

    public function questionnaireExo(){
        return $this->hasMany('App\Models\QuestionnaireExo');
    }
}
