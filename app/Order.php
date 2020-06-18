<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = ['student_id'];

    public function student()
    {
        return $this->belongsToMany('App\Student');
    }
}
