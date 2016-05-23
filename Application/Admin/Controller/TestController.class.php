<?php
/**
 * Created by PhpStorm.
 * User: raven
 * Date: 2016/5/23
 * Time: 1:26
 */

namespace Admin\Controller;
use Think\Controller;

class TestController extends Controller
{
    public function test(){
        $username = 'admin';
        $res = D("Admin")->getAdminByUsername($username);
        print_r($res);
    }
}