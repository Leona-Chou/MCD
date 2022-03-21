<?php
session_start();
$price = $_GET["price"];
$img1 = $_GET["img1"];
$img2 = $_GET["img2"];
$quan = $_GET["quan"];
if ($img2 == "null") {
    $meal = $img1;
} else {
    $meal = $img1 . "+" . $img2;
}
$total_price = $quan * $price;

//變數存入array
// $result =[];
$result = $_SESSION["order"];
$ar1 = [$meal, $quan, $price, $total_price];
$notExit = true;
if($result){
    foreach($result as $k => $val){
        if($val[0] == $meal){
            $notExit = false;
            $key = $k;
        }
    }
    foreach ($result as $k => $val) {
        if ($notExit == false) {
            $result[$key][1] += $quan;
            $result[$key][3] += $quan * $price;
            break;
        } else {
            $result[] = $ar1;
            break;
        }
    }
    
}else{
    $result[] = $ar1;
}

$_SESSION["order"] = $result;
// echo $result;
// echo $_SESSION["order"];
// print_r( $_SESSION["order"] );

header("location:shoppingCart.php");
?>