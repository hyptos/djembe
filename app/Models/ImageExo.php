<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ImageExo extends Model {
	protected $table = 'image_exos';
    protected $fillable = ['url'];

    public function exercices(){
        return $this->hasMany('App\Models\Exercice', 'imageexo_id');
    }

}
