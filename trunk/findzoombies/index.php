<?php
$root_path = dirname(__FILE__);

require $root_path . '/conf/config.php';

$root_url = $GLOBALS['app-config']['url_base'];

include $root_path . $GLOBALS['app-config']['app_path'] . '/index.php';