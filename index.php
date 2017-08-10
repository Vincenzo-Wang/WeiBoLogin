<?php
require_once 'config.php';
require_once 'libweibo-master/saetv2.ex.class.php';


$isLogin = isset($_COOKIE['accesstoken']);

?>

<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    <script src=http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=704924529 type="text/javascript" charset="utf-8"></script>
    <meta charset="UTF-8" />
    <title>微博测试</title>
</head>
<body>
<?php if(!$isLogin) { ?>
  
    <a href="wblogin.php" ><img src="./libweibo-master/weibo_login.png" /></a>
<?php } else { ?>
    您已成功登录微博;<br/>
    <a href="exit.php">退出登录</a>
    <hr />
    <wb:publish action="pubilish" type="web" language="zh_cn" button_type="red" button_size="middle" refer="y" appkey="18kF5T" ></wb:publish>
    <script>
        WB2.anyWhere(function(W){
    W.widget.publish({
        action:"pubilish",
        type:"web",
        language:"zh_cn",
        button_type:"red",
        button_size:"middle",
        refer:"y",
        appkey:"18kF5T",
        id: "wb_publisher"
    });

});
    </script>
<?php
/*    // var_dump($_COOKIE['accesstoken']);
$o = new SaeTClientV2(WB_KEY, WB_SEC, $_COOKIE['accesstoken']);
    // var_dump($o);
$res = $o->update($_COOKIE['accesstoken'], '这是来自皮皮聪的个人博客的测试微博');
    var_dump($res);
$res2 = $o->upload('测试','./test.png');
    var_dump($res2);
$res3 = $o->home_timeline();
    var_dump($res3);*/

 } ?>
</body>
</html>
