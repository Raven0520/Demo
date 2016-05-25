<?php
/**
 * Created by PhpStorm.
 * User: raven
 * Date: 2016/5/23
 * Time: 0:24
 */
//弹框
function show ($status,$message,$data=array()){
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );
    exit(json_encode($result));
}
//加密密码
function getMd5Password($password){
    return md5($password.C('MD5_PRE'));
}
//生成随机验证码
function buildRandomString($type = 1,$length = 4)
{
    if ($type == 1) {
        $chars = join ( "", range ( 0, 9 ) );
    } elseif ($type == 2) {
        $chars = join ( "", array_merge ( range ( "a", "z" ), range ( "A", "Z" ) ) );
    } elseif ($type == 3) {
        $chars = join ( "", array_merge ( range ( "a", "z" ), range ( "A", "Z" ), range ( 0, 9 ) ) );
    }
    if ($length > strlen ( $chars )) {
        exit ( "字符串长度不够" );
    }
    $chars = str_shuffle ( $chars );
    return substr ( $chars, 0, $length );
}
//验证码