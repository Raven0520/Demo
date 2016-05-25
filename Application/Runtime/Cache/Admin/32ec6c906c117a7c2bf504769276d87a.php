<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>登陆</title>
    <link type="text/css" rel="stylesheet" href="/Public/js/style/reset.css">
    <link type="text/css" rel="stylesheet" href="/Public/js/style/main.css">
</head>

<body>
<div class="headerBar">
    <div class="logoBar login_logo">
        <div class="comWidth">
            <div class="logo fl">
                <a href="#"><img src="/Public/images/logo.jpg" alt="慕课网"></a>
            </div>
            <h3 class="welcome_title">欢迎登陆</h3>
        </div>
    </div>
</div>

<div class="loginBox">
    <div class="login_cont">
        <form method="post" >
            <ul class="login">
                <li class="l_tit">邮箱/用户名/手机号</li>
                <li class="mb_10"><input type="text"  name="username" placeholder="请输入用户名" class="login_input user_icon"/></li>
                <li class="l_tit">密码</li>
                <li class="mb_10"><input type="password" name="password" placeholder="请输入密码" class="login_input user_icon"/></li>
                <li class="l_tit">验证码</li>
                <li class="mb_10"><input id="verify_img" type="password" name="verify" placeholder="请输入验证码" class="login_input user_icon"/></li>
                <img width="50%" height="50%" src="/admin.php?m=admin&c=login&a=verify_c" alt="验证码" title="点击刷新">
                <li class="autoLogin"><input type="checkbox" id="a1" class="checked"><label for="a1">自动登陆</label></li>
                <li><input type="button" value="" class="login_btn" onclick="login.check()"></li>
            </ul>
        </form>
        <div class="login_partners">
            <p class="l_tit">使用合作方账号登陆网站</p>
            <ul class="login_list clearfix">
                <li><a href="#">QQ</a></li>
                <li><span>|</span></li>
                <li><a href="#">网易</a></li>
                <li><span>|</span></li>
                <li><a href="#">360</a></li>
                <li><span>|</span></li>
                <li><a href="#">人人网</a></li>
                <li><span>|</span></li>
                <li><a href="#">新浪微博</a></li>
                <li><span>|</span></li>
                <li><a href="#">腾讯微薄</a></li>
            </ul>
        </div>
    </div>
    <a class="reg_link" href="#"></a>
</div>

<div class="hr_25"></div>
<div class="footer">
    <p><a href="#">慕课简介</a><i>|</i><a href="#">慕课公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
    <p>Copyright &copy; 2006 - 2014 慕课版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
    <p class="web"><a href="#"><img src="/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/Public/images/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
<script src="/Public/js/jquery.js"></script>
<script src="/Public/js/layer/layer.js"></script>
<script src="/Public/js/layer.js"></script>
<script src="/Public/js/admin/login.js"></script>
<script src="/Public/js/admin/common.js"></script>
</html>