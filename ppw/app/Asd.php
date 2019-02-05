<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asd extends Model
{
    public function transaction(){

        return$this->hasMany('App\Transaction');

    }

    public function member(){

        return $this->belongsToMany('App\Member','asd_member','member_id','asd_id');

    }

    public function user(){

        return $this->hasMany('App\User');
    }

    public function report (){

        return $this->HasMany('App\Report');
    }
}
