<?php
session_start();
global $connection;
include('conn.php');
include('function.php');
include('header.php');
include('footer.php');
$orders=mysqli_query($connection,"select * from deliveryrecord order by recordid desc");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../assets/style.css"/>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap.css"/>
<script type="text/javascript" src="../assets/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../assets/bootstrap.js"></script>
<title>Untitled Document</title>
<style>
#customer tr:nth-child(even){background-color:rgba(144,202,244,0.3)}
#customer tr:nth-child(odd){background-color:rgba(248,246,247,0.3)}
</style>
</head>

<body style="background-color:#cecfe9">

<div class="container-fluid" style="padding-top:1em">
  <div class="row" style="background-color:#cecfe9;background-size:100%;background-repeat:repeat-y;background-attachment:fixed;background-origin:border-box;padding-top:1em;color:#000;font-weight:600">
  <div class="col-md-3"></div>
    <div class="col-md-8 "> 
    <div class="row">   
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
        
           <div class="page-header" style="padding-left:1em">
       <h2>Welcome 
       <span class="text-danger">
       
       <?php
	   if(isset($_SESSION['admin'])){
		   echo $_SESSION['admin'];
		   
	   }
	   else{
		   $_SESSION['admin']='';
	   }
	   ?></span></h2>
     
    </div>
            
        </li>        
      </ol>
    </div>
             <div class="row">
             <table width="0" border="0" class="table table-hover" style="color:#000;font-size:15px" id="customer">
  <tr>
    <td>No</td>
    <td>Customer Name</td>
    <td>Phone</td>
    <td>Delivery Address</td>
    <td>Item(s)</td>
    <td>Ordered_Date</td>
    <td>Sended_Date</td>
    <td>Action</td>
  </tr>
  
  
  <?php 
	  
	  while($out=mysqli_fetch_array($orders))
	  {
				
		   $show='<tr>';
           $show.='<td>'.$out['recordid'].'</td>';
		   $show.='<td>'.$out['deliveryname'].'</td>';	
		   $show.='<td>'.$out['deliveryphone'].'</td>';	 
		   $show.='<td>'.$out['deliveryaddress'].'</td>';
		   $show.='<td>';
		   $orderid=$out['orderid'];
		   $order=mysqli_query($connection,"select ordersdetail.*,product.* from ordersdetail left join product on ordersdetail.productid=product.productid where ordersdetail.orderid='$orderid'");
							while($row=mysqli_fetch_assoc($order))
							 {
								$show.='<ul><li>'.$row['productname'].'<span style="color:red;">
								['.$row['productqty'].']</span></li></ul>';
							 }
							$show.='</td>';
							$show.='<td>'.$out['orderdate'].'</td>';
							$show.='<td>'.$out['senddate'].'</td>';
											
												
						$show.='<td><a href="status.php?id='.$out['recordid'].'&status=4" title="delete">  <i class="fa fa-trash fa-lg"></i></a></td>';
						$show.='</tr>';
						echo $show; 
					
  }
						
						
						
						
						?>
												
						</table>

             
             
             
             </div></div>
</body>
</html>