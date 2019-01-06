<?php

namespace App\Tools;

class RequestView
{

    private $req;
    private $nameRoute;
    private $namePage;
    private $data;

    public function __construct($name, $req, $abs = false, $data = [])
    {

    }

    public static function loadRequest($string){
//        return new RequestView();
    }
}