<?php 
session_start();
$id=$_GET['id'];
	if($_SESSION['cart'][$id]==1)
	{
		unset($_SESSION['cart'][$id]);
		$_SESSION['num']--;
	}
	else 
	{
		$_SESSION['cart'][$id]--;
		
		$_SESSION['num']--;
	}

header("location:cart.php");


?>