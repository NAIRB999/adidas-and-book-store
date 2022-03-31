<?php
include 'conn.php';
global $connection;
$id=$_GET['id'];
$pid=$_GET['id'];
$status=$_GET['status'];
if($status==1)
	{
	$query="update orders set status=1,senddate=now() where orderid='$id'";
	$go_update=mysqli_query($connection,$query); 
	$new="select * from orders where orderid='$pid'";
	$go=mysqli_query($connection,$new);
	while($out=mysqli_fetch_array($go)){
	$customerid=$out['customerid'];
	$orderid=$out['orderid'];
	$deliveryname=$out['deliveryname'];
	$deliveryphone=$out['deliveryphone'];
	$deliveryaddress=$out['deliveryaddress'];
	$orderdate=$out['orderdate'];
	$senddate=$out['senddate'];}
	$go_query="insert into deliveryrecord(customerid,orderid,deliveryname,deliveryphone,deliveryaddress,orderdate,senddate)";
	$go_query.="values ('$customerid','$orderid','$deliveryname','$deliveryphone','$deliveryaddress','$orderdate','$senddate')";
	$goq=mysqli_query($connection,$go_query);
					   if(!$goq)
					   {
						   die("QUERY FAILED".mysqli_error($connection));
					   }
					   
					   if(!$go_update)
					   {
						   die("QUERY FAILED".mysqli_error($connection));
					   }
					   
	
	header("location:order_mgmt.php");
}

if($status==3)
{
	$did=$_GET['id'];
	$query="Delete from orders where orderid='$did'";
	$go_query=mysqli_query($connection,$query);
	echo "<script>location.href='order_mgmt.php'</script>";
	
	}
	
if($status==4)
{
	$tid=$_GET['id'];
	$query="Delete from deliveryrecord where recordid='$tid'";
	$go_query=mysqli_query($connection,$query);
	echo "<script>location.href='deliveryrecord.php'</script>";
	
	}
	

?>