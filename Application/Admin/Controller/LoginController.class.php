<?php
/**
 * Created by PhpStorm.
 * User: Raven
 * Date: 2016/5/22
 * Time: 22:37
 */

namespace Admin\Controller;
use Think\Controller;
use Think\Think;

class LoginController extends Controller
{
   public function index(){
       if (session('adminUser')){
           $this->redirect('/admin.php');
       }

       $this->display();
   }
   public function verify_c(){
       $verify = new \Think\Verify();
       $verify->entry();
   }
   public function check(){
       $username = $_POST['username'];
       $password = $_POST['password'];

       if (!trim($username)){
           return show(0,'用户名不能为空');
       }
       if (!trim($password)){
           return show(0,'密码不能为空');
       }

       $res = D('Admin')->getAdminByUsername($username);
       if (!$res){
           return show(0,'该用户不存在');
       }
       if ($res['password'] != getMd5Password($password)){
           return show(0,'密码错误');
       }

       session('adminUser',$res);
       return show(1,'登陆成功');
   }
   public function loginOut(){
       session('adminUser',null);
       $this->redirect('admin/login');
   }
}