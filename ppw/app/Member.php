<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function asd()
    {
        return $this->belongsToMany('App\Asd', 'asd_member', 'member_id', 'asd_id')->withTimestamps();
    }

    public function provider()
    {
        return $this->hasOne('App\Provider');
    }

    public function user_site(){

        return $this->belongsTo('App\UserSite');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}