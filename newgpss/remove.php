<?php 
session_start();
$id=$_GET['id'];
$num = $_SESSION['cart'][$id];
$_SESSION['num']-=$num;
unset($_SESSION['cart'][$id]);
header("location:cart.php");
?>