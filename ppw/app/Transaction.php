<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function asd(){

        return $this->belongsTo('App\Asd');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function provider(){

        return $this->belongsTo('App\Provider');
    }

    public function collaborator(){

        return $this->belongsTo('App\Collaborator');
    }

}
