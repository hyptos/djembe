<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Wiki extends Model {
	protected $table = 'wikis';
    protected $fillable = ['name'];

}
