<?php
define("MB_AKEY",$GLOBALS['app-config']['app1']['app_key']); //这里的'*********'请改成你的App Key
define("MB_SKEY",$GLOBALS['app-config']['app1']['app_secret']); //这里的'*********'请改成你的App Secret
$RP = $root_path . '/app1';
$CP = $root_url . $GLOBALS['app-config']['app1']['css_path'];
$JP = $root_url . $GLOBALS['app-config']['app1']['js_path'];
$IP = $root_url . $GLOBALS['app-config']['app1']['img_path'];

$lib = $root_path . $GLOBALS['app-config']['oauth_lib_path'];
session_start();
require_once($lib . '/config.php');
require_once($lib . '/oauth.php');
require_once($lib . '/opent.php');

$callback_url = $root_url . '/app1/app1.php';

$o = new MBOpenTOAuth(MB_AKEY, MB_SKEY);
$keys = $o->getRequestToken($callback_url); //这里填上你的回调URL
$aurl = $o->getAuthorizeURL($keys['oauth_token'], false, '');
$_SESSION['keys'] = $keys;

?><!DOCTYPE html>
<html>
    <head>
        <title>晒晒今年你有多穷</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo $CP . '/global.css'?>" type="text/css" media="all" />
    </head>
    <body>
        <div class="container">
            <h1>想知道你今年又多穷么？</h1>
            <img src="<?php echo $IP . '/qiong2.jpg'?>"/>
            <a href="<?php echo $aurl;?>" target="_self">点击进入游戏&gt;&gt;</a>
        </div>
    </body>
</html>