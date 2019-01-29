<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function user(){

        return $this->belongsToMany('App\User','package_user','user_id','package_id');
    }

    public function course(){

        return $this->belongsToMany('App\Course','package_course','course_id','package_id');
    }
}
