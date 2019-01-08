<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function asd(){

        return $this->belongsToMany('App\Asd','asd_member','member_id','member_id');
    }
}
