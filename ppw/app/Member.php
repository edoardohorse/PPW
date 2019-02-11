<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $fillable = [
            'cod_fiscale',
            'numero_cell',
            'numero_tel',
            'data_stipula_ass',
            'scadenza_ass',
            'numero_ass',
            'data_cert_medico',
            'scadenza_cert_med',
            'note',
            'p_iva',
            'user_site_id'
    ];


    public function asd()
    {
        return $this->belongsToMany('App\Asd', 'asd_member', 'member_id', 'asd_id')->withTimestamps();
    }

    public function provider()
    {
        return $this->hasOne('App\Provider');
    }

    public function user_site(){

        return $this->belongsTo('App\UserSite');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }
}