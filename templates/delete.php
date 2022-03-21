<?php
session_start();
$ids = $_GET["ids"];
$arr = $_SESSION["order"];
// var_dump($arr);
// 取索引2（數量）
foreach ($arr as $k => $val)
{
    if ($ids == $k)
    {
        if ($arr[$k][1] > 1){
        $arr[$k][1] -= 1;
        $arr[$k][3] = $arr[$k][3] - $arr[$k][2];
        break;
        }else{
            unset($arr[$k]);
            break;
        }
    }
}
$_SESSION["order"] = $arr;
// 記得扔到session裡面
header("location:shoppingCart.php");
// 刪除完跳轉回去
?>