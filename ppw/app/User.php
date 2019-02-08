<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = [
                'nome',
                'cognome',
                'cap',
                'indirizzo',
                'citta',
                'provincia',
                'data_nascita',
                'genere',
                'member_id'
    ];
    public function transaction(){
        return $this->hasMany('App\Transaction');
    }

    public function member(){
        return $this->hasOne('App\Member');
    }
    public function taxdata(){
        return $this->belongsTo('App\TaxData');
    }

    public function card(){
        return $this->hasMany('App\User');
    }

    public function asd(){

        return $this->belongsTo('App\Asd');
    }


    public function course(){

    return $this->belongsToMany('App\Course','course_user','course_id','user_id');
    }

    public function collaborator(){

        return $this->belongsTo('App\Collaborator');
    }

    public function package(){

        return $this->belongsToMany('App\Package','package_user','package_id','user_id');
    }
}