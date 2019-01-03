<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asd extends Model
{
    public function transactions(){

        return$this->hasMany('App\Transaction');

    }
}
