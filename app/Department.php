<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table="department";
    protected $fillable=['name','description']; 

    //  public function doctor()
    // {
    // 	return $this->hasOne('App\Doctor','id','doctor_id');
    // }
}
