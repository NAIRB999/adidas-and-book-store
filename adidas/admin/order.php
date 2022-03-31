<?php
session_start();
global $connection;
include('conn.php');
$orders=mysqli_query($connection,"select * from ad_order order by orderid desc");

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php include('header.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Order
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Order</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
	
    
     <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Order Lists</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                	<th>NO</th>
                  <th>Customer <br>
                  Name</th>
                  <th>Phone</th>
                  <th>Delivery <br>
                  Address</th>
                  <th>Order<br>
                  Date</th>
                  <th>Sended <br>
                  Date</th>
                  <th>Action</th>
                  
                  
                </tr>
              
                <?php while($out=mysqli_fetch_array($orders)){
	  $check=$out['status'];
		{
			if($check>0){
				$show='<tr class="mark">';
			}
				else{
		   		$show='<tr>';
				}
				$show.='<td>'.$out['orderid'].'</td>';
		  		$show.='<td>'.$out['deliveryname'].'</td>';	
		  		$show.='<td>'.$out['deliveryphone'].'</td>';	  
				$show.='<td>'.$out['deliveryaddress'].'</td>';
				$show.='<td>'.$out['orderdate'].'</td>';
				$orderid=$out['orderid'];
				$order=mysqli_query($connection,"select orderdetail.*,product.* from orderdetail left join product on orderdetail.productid=product.productid where orderdetail.orderid='$orderid'");     										
				while($row=mysqli_fetch_assoc($order))
				{
				$show.='';}
				$show.='</td>';
		
				$chesec=$out['status'];
				if($chesec>0)
				{$show.='<td>'.$out['sentdate'].'</td>';}
				else{
				$show.='<td>----/--/--</td>';}
				if($out['status']){
				$show.='<td><a href="status.php?id='.$out['orderid'].'&status=0" class="btn btn-danger">
				Undo</a></td>';}
				else{ $show.='<td><a href="status.php?id='.$out['orderid'].'&status=1" class="btn btn-success">
				Mark as Delivered</a></td>';}
				$show.='</tr>';
				echo $show; }
  }
			?>
              
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
    </div>
   <?php include('footer.php');?>