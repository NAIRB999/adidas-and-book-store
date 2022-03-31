<?php
include 'conn.php';
$id=$_GET['id'];
$status=$_GET['status'];
if($status==1){
	$query="update ad_order set status=1,sentdate=now() where orderid='$id'";
	$go_update=mysqli_query($connection,$query);
	header("location:order.php");
}else{
	$query="update ad_order set status=0,sentdate='null' where orderid='$id'";
	$go_update=mysqli_query($connection,$query);
	header("location:order.php");
}
	

?>