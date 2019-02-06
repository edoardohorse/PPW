<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
//    public $with = ['users'];


    public function users(){

        return $this->belongsTo('App\User');
    }
}
