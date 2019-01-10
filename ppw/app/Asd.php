<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asd extends Model
{
    public function transactions(){

        return$this->hasMany('App\Transaction');

    }

    public function member(){

        return $this->belongsToMany('App\Member','asd_member','member_id','asd_id');

    }
}
