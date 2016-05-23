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
        if (!$isLogin){
            //跳转到登陆页面
            $this->redirect('/admin.php?c=login');
        }
    }
    /**
     * 获取登录用户信息
     */
    public function getLoginUser(){
        return session("adminUser");
    }
    /**
     * 判断是否登陆
     */
    public function islogin(){
        $user = $this->getLoginUser();
        if ($user && is_array($user)){
            return true;
        }
        return false;
    }
}