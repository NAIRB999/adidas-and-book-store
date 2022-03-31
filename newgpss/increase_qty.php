<?php 
session_start();
$id=$_GET['id'];
$_SESSION['cart'][$id]++;
$_SESSION['num']++;
header("location:cart.php");


?>