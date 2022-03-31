<?php 
	session_start();
	include 'admin/conn.php';
	include 'admin/function.php';
	$order_id=$_SESSION['orderid'];
	
	//$_SESSION['order_id']=$order_id;
	//echo $order_id;
?>

<?php
 include 'header.php';
?>
  <div class="container CusTop" style="margin-top: 80px;">
     <div class="row">
       <div class="col-sm-12">
             <div class="well well-sm">
                <h3>Welcome
                 <span class="showname">
                     <?php 
					   if(!empty($_SESSION['user'])){
						    echo $_SESSION['user'];
							
					   }
					   else{
						   $_SESSION['user']='';
						   
					   }
					 ?>
                 </span>
                </h3>
                <p class="text-success lead">&nbsp;&nbsp;&nbsp; You successfully sumitted the following product.Thank for your shoppping here</p>
             </div>
             </div>
             
<div class="row">
	<div class="col-md-8 col-xs-offset-2">
    <table class="table table-bordered">
  <tr>
    <th colspan="3" class="text-center">Order_information</th>
    </tr>
  <tr>
    <td><b>Product Name</b></td>
    <td><b>Product Price</b></td>
    <td><b>Unit Price</b></td>
  </tr>
  <?php $total=0;
 		$query="select orderdetail.*,product.* from orderdetail left join product on orderdetail.productid=product.productid where orderdetail.orderid='$order_id'";
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){
			echo "Query Falied".mysqli_error($connection);
		}
		while($out=mysqli_fetch_array($go_query))
		{
			$product_name=$out['productname'];
			$price=$out['price'];
		
			$unit_price=$price;
			$total+=$unit_price;
			
			echo "<tr>
			<td>{$product_name}<br></td>
			<td>{$price}<br></td>
			<td>{$unit_price}</td>
			</tr>";
		}
  
  
  ?>
  <tr>
  	<td colspan="2" align="right"><b>Total Amount is</b> </td>
    <td><?php echo $total; ?></td>
    </tr>
</table>

  </div>

</div>
</body>
</html>		