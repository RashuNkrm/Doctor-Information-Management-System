<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table="doctor";
    protected $fillable=['name','gender','address','phone','dob','department_id'];

    public function department()
    {
    	return $this->hasOne('App\Department','id','department_id');
    }
}
