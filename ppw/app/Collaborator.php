<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    public function transactions(){

        return $this->hasMany('App\Transaction','collaboratore_id');

    }
}
