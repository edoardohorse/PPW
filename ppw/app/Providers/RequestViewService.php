<?php
/**
 * Created by PhpStorm.
 * User: Edoardo
 * Date: 06/01/2019
 * Time: 11:29
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Tools\RequestView;

class RequestViewService extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('RequestView', function () {
            return new RequestView;
        });
    }
}