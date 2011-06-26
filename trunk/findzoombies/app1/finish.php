<?php
$root_path = dirname(__FILE__) . '/../';
require $root_path . '/conf/config.php';

define("MB_AKEY",$GLOBALS['app-config']['app1']['app_key']); //这里的'*********'请改成你的App Key
define("MB_SKEY",$GLOBALS['app-config']['app1']['app_secret']); //这里的'*********'请改成你的App Secret

$lib = $root_path . $GLOBALS['app-config']['oauth_lib_path'];
session_start();
require_once($lib . '/config.php');
require_once($lib . '/oauth.php');
require_once($lib . '/opent.php');
require_once($lib . '/api_client.php');

$c = new MBApiClient( MB_AKEY , MB_SKEY , $_SESSION['last_key']['oauth_token'] , $_SESSION['last_key']['oauth_token_secret']  );

function cs_get_client_ip($return_int = false) {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if ($return_int == true) {
        $ip = ip2long($ip);
    }

    return $ip;
}

$p = array(
    'c' => $_POST['weibo-content'],
    'ip' => cs_get_client_ip(),
    'j'=> '','w'=> '',
    'p' => array(
        'image/jpeg',
        $_POST['weibo-img'],
        file_get_contents($root_path . '/img/app1/' . $_POST['weibo-img'])
     ),
    'type'=> 1,
);

$ret = $c->postOne($p);

if ($ret['ret'] == 0) {
    $msg_show = '发表成功';
} else {
    $msg_show = '发表失败';
}

if (isset($_POST['follow']) && $_POST['follow'] == 1){
    $t = $c->setMyidol(array('n'=>'charlestang', 'type'=>1));
    $c->setMyidol(array('n'=>'lyly_wang', 'type'=>1));
}

?><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php echo $msg_show;?>
    </body>
</html>