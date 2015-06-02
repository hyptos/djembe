<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $table = 'stats';
    protected $fillable = ['reussite','temps','avancement'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function cours()
    {
         return $this->belongsTo('App\Models\Cours');
    }
}
