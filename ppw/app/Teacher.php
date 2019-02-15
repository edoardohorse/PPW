<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function collaborator(){

        return $this->hasOne('App\Collaborator');
    }

    public function course(){

        return $this->belongsToMany('App\Course','teacher_course','teacher_id','course_id');
    }
}
