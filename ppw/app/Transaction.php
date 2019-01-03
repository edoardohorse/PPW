<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function asd(){

        return $this->belongsTo('App\Asd');
    }
}
