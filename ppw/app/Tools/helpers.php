<?php

/**
 * Restituisce una Route con il path relativo
 *
 * @param  string   $name
 * @param  array    $data
 * @return string
 */
if (! function_exists('GET_RELATIVE_ROUTE')) {
    function GET_RELATIVE_ROUTE($name, array $data = []){
        return route($name, $data, false);
    }
}


if (! function_exists('GET_NAME_PAGE')) {
    function GET_NAME_PAGE($view){
        return $view->namePag;
    }
}

if (! function_exists('GET_NAME_ROUTE')) {
    function GET_NAME_ROUTE($view){
        return  $view->nameRoute;
    }
}

if (! function_exists('GET_REQ')) {
    function GET_REQ($view){
        return  $view->req;
    }
}

if (! function_exists('GET_NAME_VIEW')) {
    function GET_NAME_VIEW($view){
        return  $view->nameView;
    }
}

if (! function_exists('GET_NAME_ROUTE_AS_ARRAY')) {
    function GET_NAME_ROUTE_AS_ARRAY($view){
        return ['namePage' => $view->namePage];
    }
}

if (! function_exists('GET_VIEW')) {
    function GET_VIEW($nameRoute){
        global $scaletta;

//        dd($scaletta);
        foreach($scaletta->views as $view){
//            var_dump($view);
            if($nameRoute == $view->nameRoute)
                return $view;
        }
    }
}

