<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    // protected $primaryKey = 'course_id';
    protected $fillable = ['course_id','course_name','section','class_start','class_end'];

    public function student()
    {
        return $this->belongsToMany('App\Student');
    }
}
