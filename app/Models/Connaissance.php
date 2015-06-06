<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Connaissance extends Model {
	protected $table = 'connaissance';
    protected $fillable = ['solfege_moyen', 'instruments_moyen', 'histoire_moyen'];

}
