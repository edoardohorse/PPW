<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $fillable = [
        'data_tesseramento',
        'scadenza_tesseramento',
    ];
    public function user(){

        return $this->belongsTo('App\User');
    }
}
