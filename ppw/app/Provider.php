<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function transaction(){

        return $this->hasMany(Transaction::class);

    }

    public function member (){

        return $this->belongsTo('App\Member');
    }

}
