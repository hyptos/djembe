<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $table = 'cours';
    protected $fillable = ['titre','difficulte','type'];

    public function chapitres()
    {
        return $this->hasMany('App\Models\Chapitre');
    }

    public function stats()
    {
        return $this->hasOne('App\Models\Stats');
    }
}
