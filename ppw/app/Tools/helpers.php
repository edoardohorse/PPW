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


if (! function_exists('GET_NAME_ROUTE')) {
    function GET_NAME_ROUTE(){

    }
}