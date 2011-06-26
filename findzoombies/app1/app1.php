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

$o = new MBOpenTOAuth( MB_AKEY , MB_SKEY , $_SESSION['keys']['oauth_token'] , $_SESSION['keys']['oauth_token_secret']  );
$last_key = $o->getAccessToken(  $_REQUEST['oauth_verifier'] ) ;//获取ACCESSTOKEN
$_SESSION['last_key'] = $last_key;

$user = $last_key['name'];

$c = new MBApiClient( MB_AKEY , MB_SKEY , $_SESSION['last_key']['oauth_token'] , $_SESSION['last_key']['oauth_token_secret']  );
$user_info = $c->getUserInfo();

$mysql = @mysql_connect('localhost', 'test', 'test421');
if ($mysql !== false) {
    $d_id = mysql_escape_string($user_info['data']['name']);
    $d_nick = mysql_escape_string($user_info['data']['nick']);
    $d_fans_num = mysql_escape_string($user_info['data']['fansnum']);
    $d_idol_num = mysql_escape_string($user_info['data']['idolnum']);
    $d_tweet_num = mysql_escape_string($user_info['data']['tweetnum']);
    $d_head = mysql_escape_string($user_info['data']['head']);
    $d_isvip = mysql_escape_string($user_info['data']['isvip']);
    $d_sex = mysql_escape_string($user_info['data']['sex']);
    $d_province = mysql_escape_string($user_info['data']['province_code']);
    $d_country = mysql_escape_string($user_info['data']['country_code']);
    @mysql_select_db('microapp');
    $sql = 'INSERT INTO user (id, nick, fans_num, idol_num, tweet_num, head, isvip, sex, province, country) 
        VALUES (' .
        "'{$d_id}','{$d_nick}','{$d_fans_num}','{$d_idol_num}','{$d_tweet_num}','{$d_head}','{$d_isvip}','{$d_sex}','{$d_province}','{$d_country}'"
        .') ON DUPLICATE KEY UPDATE '. "fans_num='{$d_fans_num}', idol_num='{$d_idol_num}', tweet_num='{$d_tweet_num}'";
    $sql_ret = @mysql_query($sql);
}
@mysql_close();

if ($user_info['ret'] == 0) :
    $_SESSION['user_info'] = $user_info;
    $rand = rand(0, 6);
    $datas = $GLOBALS['app-config']['app1']['app_data'];
?><!DOCTYPE html>
<html>
    <head>
        <title>晒晒今年你有多穷</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../css/app1/global.css" type="text/css" media="all" />
    </head>
    <body>
        <div class="container">
            <p class="first-line">恭喜你，<?php echo $user_info['data']['nick'];?>！</p>
            <p class="content">2011年，你穷得只剩下<?php echo $datas[$rand]['wording'];?>了！</p>
            <p class="image"><img src="../img/app1/<?php echo $datas[$rand]['img'];?>"/></p>
            <div class="form-container">
            <form method="post" action="finish.php">
                <input class="post-to"type="submit" value="" name="submit"/>
                <textarea id="weibo-content" name="weibo-content">XDJM们，瞧瞧我今年穷的，只剩下<?php echo $datas[$rand]['wording'];?>了！你们呢，也晒晒穷吧～ http://url.cn/29O6XG</textarea>
                <input type="hidden" name="weibo-img" value="<?php echo $datas[$rand]['img'];?>"/>
                <div class="follow">
                <input type="checkbox" name="follow" value="1" checked="checked" /> 收听本应用的<a href="about.html" target="_blank">创意人和开发者</a>
                </div>
            </form>
            </div>
        </div>
    </body>
</html>
<?php
endif;