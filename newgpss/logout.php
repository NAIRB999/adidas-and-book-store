<?php
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['cart']);
	unset($_SESSION['num']);
	header("location:index.php");

?>