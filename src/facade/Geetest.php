<?php


namespace tongso\geetest\facade;


use think\Facade;

class Geetest extends Facade
{
    protected static function getFacadeClass()
    {
        return \tongso\geetest\Geetest::class;
    }
}