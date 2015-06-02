<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    protected $table = 'chapitres';
    protected $fillable = ['noChapitre','contenu', 'titreChapitre'];

    public function cours()
    {
        return $this->belongsTo('App\Models\Cours');
    }

    public function questionnaire()
    {
        return $this->hasOne('App\Models\Questionnaire');
    }
}
