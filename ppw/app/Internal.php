<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internal extends Model
{
    public function collaborator(){
        return $this->hasOne('App\Collaborator');
    }

    public function course(){

        return $this->belongsToMany('App\Course','internal_course','internal_id','course_id');
    }
}
