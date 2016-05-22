<?php

namespace Admin\Controller;
use Think\Controller;
/**
 * Created by PhpStorm.
 * User: Raven
 * Date: 2016/5/22
 * Time: 22:07
 */
class IndexController extends CommonController
{
    //后台首页控制器
    public function index(){
        $this->display();
    }
}