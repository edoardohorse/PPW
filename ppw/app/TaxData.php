<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxData extends Model
{
    protected $table = 'tax_data';

    public function user(){

        return $this->hasOne('App\User');
    }
}
