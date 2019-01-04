<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function transactions(){

        return $this->hasMany(Transaction::class ,'fornitore_id'); //la convenzione lo vuole in inglese(provider) io dato che l'ho scritto in italiano devo fare così

    }
}
