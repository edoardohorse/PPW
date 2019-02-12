<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    public function course(){

        return $this->belongsToMany('App\Course','scheduling_course','scheduling_id','course_id')->withTimestamps();
    }

    public function room(){

        return $this->belongsToMany('App\Room','room_scheduling','scheduling_id','room_id')->withTimestamps();
    }
}
