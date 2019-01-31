<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    public function transaction(){

        return $this->hasMany('App\Transaction');

    }

    public function user(){

        return $this->hasOne('App\User');
    }

    public function internal(){

        return $this->belongsTo('App\Internal');
    }

    public function teacher(){

        return $this->belongsTo('App\Teacher');
    }
}
