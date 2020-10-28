<?php
namespace tongso\geetest;

use think\facade\Config;
use think\facade\Session;

class GeetestController
{
    public function index()
    {
        $geetest = new Geetest((array) Config::get('geetest'));
        Session::set('gt_user_id', $_SERVER['REQUEST_TIME']);
        Session::set('gt_server_status', $geetest->pre_process(Session::get('gt_user_id')));
        return  $geetest->get_response_str();
    }
}