<?php
require_once 'config.php';
require_once 'libweibo-master/saetv2.ex.class.php';

$code = $_GET['code'];

$keys['code'] = $code;
$keys['redirect_uri'] = CALLBACK;

$o = new SaeTOAuthV2(WB_KEY, WB_SEC);
$auth = $o->getAccessToken($keys);

// debug($auto);
setcookie('accesstoken',$auth['access_token'],time()+86400);
header('Location: index.php');