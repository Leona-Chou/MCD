<?php
// 清空session
session_start();
$_SESSION["order"] = [];

header("location:index.php");
?>