<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','name','email','password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses()
    {
        return $this->hasMany('App\Course','student_id','id');
    }
    public function orders()
    {
        return $this->hasMany('App\Order','student_id','id');
    }
}
