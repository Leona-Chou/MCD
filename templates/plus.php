<?php
session_start();
$ids = $_GET["ids"];
$arr = $_SESSION["order"];

foreach ($arr as $k => $val)
{
    if ($ids == $k)
    {
        $arr[$k][1] += 1;
        $arr[$k][3] = $arr[$k][3] + $arr[$k][2];
        break;
    }
}

$_SESSION["order"] = $arr;
// 記得扔到session裡面
header("location:shoppingCart.php");
// 增加完跳轉回去
?>