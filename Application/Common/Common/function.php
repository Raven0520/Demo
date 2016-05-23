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
function verifyImage($type,$length=4,$pixel=0,$line=0,$sess_name = "verify"){
    session_start();
    //创建画布
    $width = 80;
    $height = 28;
    $image = imagecreatetruecolor ( $width, $height );
    $white = imagecolorallocate ( $image, 255, 255, 255 );
    $black = imagecolorallocate ( $image, 0, 0, 0 );
    //用填充矩形填充画布
    imagefilledrectangle ( $image, 1, 1, $width - 2, $height - 2, $white );
    $chars = buildRandomString ( $type, $length );
    $_SESSION [$sess_name] = $chars;
    $fontfiles = array ("SIMYOU.TTF" );
    
    for($i = 0; $i < $length; $i ++) {
        $size = mt_rand ( 14, 18 );
        $angle = mt_rand ( - 15, 15 );
        $x = 5 + $i * $size;
        $y = mt_rand ( 20, 26 );
        $fontfile = "../fonts/" . $fontfiles [mt_rand ( 0, count ( $fontfiles ) - 1 )];
        $color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
        $text = substr ( $chars, $i, 1 );
        imagettftext ( $image, $size, $angle, $x, $y, $color, $fontfile, $text );
    }
    if ($pixel) {
        for($i = 0; $i < 50; $i ++) {
            imagesetpixel ( $image, mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), $black );
        }
    }
    if ($line) {
        for($i = 1; $i < $line; $i ++) {
            $color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
            imageline ( $image, mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), $color );
        }
    }
    header ( "content-type:image/gif" );
    imagegif ( $image );
    imagedestroy ( $image );
}