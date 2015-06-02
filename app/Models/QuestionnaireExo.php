<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireExo extends Model
{
    protected $table = 'questionnaire_exos';

    public function exercices()
    {
        return $this->belongsToMany('App\Models\Exercice', 'questionnaire_exos', 'questionnaire_id');
    }
}
