<?php
define('WB_KEY','704924529');
define('WB_SEC','de72da2ccf947c5f12f61e15d89c76e6');
define('CALLBACK','http://test.blog.pipicong.com/callback.php');
function deBug($val,$dump = false,$exit = true) {
    //自动获取调试函数名称$func
    if ($dump) {
        $func = 'var_dump';
    } else {
        $func = (is_array($val)) || is_object($val) ? 'print_r' : 'printf';
    }
    //输出到html
    header("Content-type:text/html;charset=utf-8");
    echo '<pre>debug output:<hr />';
    $func($val);
    echo '</pre>';
    if($exit) exit;
}