<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
     protected $table='schedule';
    protected $fillable=['schedule_date','schedule_time','schedule_day','department_id'];
    
    public function department()
    {
    	return $this->hasOne('App\Department','id','department_id');
    }

  
}
?>