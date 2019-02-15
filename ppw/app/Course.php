<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'nome_corso',
        'costo_orario',
        'discipline_id'
    ];

    protected $hidden = ['pivot'];

    public function user(){

        return $this->belongsToMany('App\User','course_user','course_id','user_id');
    }

    public function internal(){

        return $this->belongsToMany('App\Internal','internal_course','internal_id','course_id');
    }

    public function teacher(){

        return $this->belongsToMany('App\Teacher','teacher_course','course_id','teacher_id');
    }

    public function package(){

        return $this->belongsToMany('App\Package','package_course','package_id','course_id');
    }

    public function discipline(){

        return $this->belongsTo('App\Discipline');
    }

    public function scheduling(){

        return $this->belongsToMany('App\Scheduling','scheduling_course','scheduling_id','course_id');
    }
}
