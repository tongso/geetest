<?php
namespace tongso\geetest;

use think\facade\Route;
use think\Service;

class GeetestService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route::get('geetest/[:id]', "\\tongso\\geetest\\GeetestController@index");
        });
    }
}