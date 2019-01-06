<?php
/**
 * Created by PhpStorm.
 * User: Edoardo
 * Date: 06/01/2019
 * Time: 11:27
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class RequestView extends Facade{

    protected static function getFacadeAccessor(){
        return 'RequestView';
    }
}