<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model {
    protected $fillable = ['noChapitre','contenu', 'titreChapitre', 'cours_id', 'questionnaire_id'];

    public function cours()
    {
        return $this->belongsTo('App\Models\Cours');
    }

    public function questionnaire()
    {
        return $this->hasOne('App\Models\Questionnaire');
    }

}
