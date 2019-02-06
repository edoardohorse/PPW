<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function asd(){

        return $this->BelongsTo('App\Asd');
    }
}
