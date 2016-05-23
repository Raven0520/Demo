<?php
namespace Common\Model;
use Think\Model;
/**
 * Created by PhpStorm.
 * User: raven
 * Date: 2016/5/23
 * Time: 1:01
 */
class AdminModel extends Model
{
    private $_db = '';
    public function __construct()
    {
        $this->_db = M('admin');
    }
    //用用户名查找数据库
    public function getAdminByUsername($username){
        $res = $this->_db->where('username="'.$username.'"')->find();
        return $res;
    }
}