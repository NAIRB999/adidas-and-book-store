<?php 
	global $connection;
	include 'admin/conn.php';
	include 'admin/function.php';
	include 'nav.php';
	include 'footer.php';
	$order_id=$_SESSION['oder_id'];
	//$_SESSION['oder_id']=$order_id;
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  
</head>

<body style="background-color:rgba(176,191,242,0.3)">
<div class="container">

<div class="well well-lg" style="box-sizing:border-box;padding-top:5em;border-radius:5px">
<div class="row">   
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
        
           <div class="page-header" style="padding-left:1em">
       <h2>Welcome
       <span class="text-danger">
       
       <?php
	   if(isset($_SESSION['user'])){
		   echo $_SESSION['user'];
		   
	   }
	   else{
		   $_SESSION['user']='';
	   }
	   ?></span></h2>
     <p class="text-sucess lead bg-light"> You successfully sumitted the following product.Thank for your shoppping here... </p>
    </div>
            
        </li>        
      </ol>
    </div>
</div>

     
<div class="container">              
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 table table-responsive" style="padding-top:1em">
 <div class="panel panel-success"> 
<div class=" panel-body">
<table class="table table-striped table-condensed">
  <tr>
    <td>&nbsp;
    <?php
		$query="select * from orders where orderid='$order_id'";
		$go_query=mysqli_query($connection,$query);
		while($out=mysqli_fetch_array($go_query))
		{
			$db_name=$out['deliveryname'];
			$db_phone=$out['deliveryphone'];
			$db_address=$out['deliveryaddress'];
		}
	global $db_name;
	global $db_phone;
	global $db_address;
	?>
    <div class="panel panel-default">
    <div class="panel-heading">
    <h3><span><i class="fa fa-envelope"></i> </span>Customer Information</h3>
    </div>
    <div class="panel-body pull-left">
    <p><span><i class="fa fa-user"></i> </span>Customer Name=<?php echo $db_name; ?></p>
    <p><span><i class="fa fa-phone"></i> </span>Customer Phone=<?php echo $db_phone; ?></p>
    <p><span><i class="fa fa-home"></i> </span>Customer Address=<?php echo $db_address ;?></p>
    </div>
    </div></td>
    <td>&nbsp;
    </td>
  </tr>
</table>
</div>
</div>
</div>

<div class="col-lg-6 col-md-12 col-sm-12" style="padding-top:1em">  
 <div class="panel panel-success"> 
<div class=" panel-body">  
    <table class="table table-striped table-condensed table-responsive" id="cus">
  <tr>
    <td colspan="4">&nbsp; Order_information</td>
    </tr>
  <tr>
    <td>Product Name</td>
    <td>Product Price</td>
    <td>Product Qty</td>
    <td>Unit Price</td>
  </tr>
  <?php $total=0;
 		$query="select ordersdetail.*,product.* from ordersdetail left join product on ordersdetail.productid=product.productid where ordersdetail.orderid='$order_id'";
		$go_query=mysqli_query($connection,$query);
		while($out=mysqli_fetch_array($go_query))
		{
			$product_name=$out['productname'];
			$price=$out['price'];
			$qty=$out['productqty'];
			$unit_price=$qty*$price;
			$total+=$unit_price;
			
			echo "<tr>
			<td>{$product_name}<br></td>
			<td><i class='fa fa-dollar' style='color:#C9650A'></i> {$price}<br></td>
			<td>{$qty}<br></td>
			<td><i class='fa fa-dollar' style='color:#C9650A'></i> {$unit_price}</td>
			</tr>";
		}
  
  
  ?>
  <tr>
  	<td colspan="3" align="right">Total Amount is </td>
    <td><i class="fa fa-dollar" style="color:#C9650A"></i> <?php echo $total; ?></td>
    </tr>
</table>
</div>
</div>
</div>


</div>
</div>

</div>
</body>
</html>