<?php
	session_start();
	include 'admin/conn.php';
		$user_id=$_POST['user_id'];
		$user_name=$_POST['username'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$payment=$_POST['payment_type'];
		$cardno=$_POST['cardno'];
		$query="insert into orders (orderdate,customerid,deliveryname,deliveryphone,deliveryaddress,status)";
		$query.="values(now(),'$user_id','$user_name','$phone','$address',0)";
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){
						   die("QUERY FAILED".mysqli_error($connection));
					   }
		
	$order_id=mysqli_insert_id($connection);
	foreach($_SESSION['cart'] as $id=>$qty)
	{
		$getprice=mysqli_query($connection,"select * from product where productid='$id'");
		while($out=mysqli_fetch_array($getprice))
		{
			$db_price=$out['price'];
			$db_qty=$out['qty'];
		}
		$db_qty=$db_qty - $qty;
			$amount=$db_price * $qty;
			$query="insert into ordersdetail(orderid,productid,productqty,amount)";
			$query.="values('$order_id','$id','$qty','$amount')";
			$go_query=mysqli_query($connection,$query);
			
			$query="update product set qty='$db_qty' where productid='$id'";
	$go_query=mysqli_query($connection,$query);
	if(!$go_query){
		die("QUERY FAILED".mysqli_error($connection));
											}
			
	}
$_SESSION['oder_id']=$order_id;
unset($_SESSION['cart']);
header("location:show_success.php");
?>