<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{

    protected $fillable =[
        'nome'
    ];

    public function course(){

        return $this->hasMany('App\Course')->withTimestamps();
    }
}
