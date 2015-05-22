<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email','password','teach'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->id;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Automatically Hash the password when setting it
     * @param string $password The password
     */
    public function setPassword($password)
    {
        $this->password = Hash::make($password);
    }

    public function teachTo(){
        return $this->belongsToMany('App\Models\Enseigne', 'enseigne', 'learner_id', 'teacher_id')->withPivot('App\Models\User', 'learner_id');
    }

    public function learnFrom(){
        return $this->belongsToMany('App\Models\Enseigne', 'enseigne', 'teacher_id', 'learner_id')->withPivot('App\Models\User', 'teacher_id');
    }

    public function stats()
    {
        return $this->hasOne('App\Models\Stats');
    }

}
