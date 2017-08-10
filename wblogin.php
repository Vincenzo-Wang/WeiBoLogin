<?php
require_once 'config.php';
require_once 'libweibo-master/saetv2.ex.class.php';

$o = new SaeToAuthV2(WB_KEY, WB_SEC);
$url = 'http://test.blog.pipicong.com/callback.php';
$oauth = $o->getAuthorizeURl($url);
header('Location:' .$oauth);