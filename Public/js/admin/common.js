/**
 * Created by Raven on 2016/5/25.
 */
/**
 * 验证码刷新
 */
var login_img = $(".login").find('img');
var verify_img = login_img.attr("src");
login_img.attr('title', '点击刷新');
login_img.click(function () {
    if ( verify_img.indexOf('?')>0){
        $(this).attr("src", verify_img + '&random=' + Math.random());
    }else {
        $(this).attr("src", verify_img.replace(/\?.*$/,'')+'?'+Math.random());
    }
});
