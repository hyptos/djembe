<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model {
    protected $fillable = ['reussite','temps','avancement'];

    public function cours()
    {
        return $this->hasMany('App\Models\Cours');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

}
