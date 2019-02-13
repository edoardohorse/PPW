<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $fillable = [
        'nome_pacchetto',
        'prezzo',
    ];




    public function user(){

        return $this->belongsToMany('App\User','package_user','package_id','user_id')->withTimestamps();;
    }

    public function course(){

        return $this->belongsToMany('App\Course','package_course','package_id','course_id')->withTimestamps();
    }
}
