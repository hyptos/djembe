<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model {
    protected $fillable = ['reussite','temps','avancement'];

    public function cours()
    {
        return $this->hasOne('App\Models\Cours');
    }

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }

}
