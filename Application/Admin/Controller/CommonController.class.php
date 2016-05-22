<?php
/**
 * Created by PhpStorm.
 * User: Raven
 * Date: 2016/5/22
 * Time: 22:08
 */

namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->_init();
    }
    /**
     * 初始化
     */
    private function _init(){
        //如果已经登陆
        $isLogin = $this->isLogin();
    }
    /**
     * 获取登录用户信息
     */
    public function getLoginUser(){
        return session("adminUser");
    }
}