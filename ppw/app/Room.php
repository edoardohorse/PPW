<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function scheduling(){

        return $this->belongsToMany('App\Scheduling','room_scheduling','room_id','scheduling_id');
    }
}
