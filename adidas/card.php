<?php
session_start();
include 'admin/conn.php';
include 'admin/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
 include 'header.php'
?>
  <div class="container" style="margin-top: 80px;">
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
						   echo "no";
					   }
					 ?>
                 </span>
                </h3>
             </div>
            
             <div class="row">
             <div class="panel panel-success"> 
             <div class="panel-heading">
             <h2>Shopping Cart</h2>
             
             </div>
             <?php
			 if(!empty($_SESSION['cart'])):  ?>
           
             <div class=" panel-body">
             <table id="" class="table table-condensed" >
  <tr>
    <th>Photo</th>
   <th>Name</th>
   <th>Quantity</th>
   <th>Unit Price</th>
   <th>Price</th>
  <th>Action</th>
  </tr>
  <?php
		$total=0;
		foreach($_SESSION['cart'] as $id=>$qty):
		$result=mysqli_query($connection,"SELECT * FROM product WHERE productid =$id");
		$row=mysqli_fetch_assoc($result);
		$total+=$row['price'] *$qty;
		
			 ?>
             <tr>
             <td><img src="images/<?php echo $row['photo'] ?>" width="100" height="100" class="img img-thumbnail" /></td>
             <td><?php echo $row['productname'] ?></td>
             <td><?php echo $qty ?>
             <span>
             <a href="increase_qty.php? id=<?php echo $id ?>" class="glyphicon glyphicon-plus-sign"></a>
               <a href="decrease_qty.php?id=<?php echo $id ?>" class="glyphicon glyphicon-minus-sign"></a></span></td>
             <td><?php echo $row['price'] ?> </td>
			 <td><?php echo $row['price'] *$qty ?> </td>
             <td>
             <span style="margin:5px"></span>
              <a href="remove.php?id=<?php echo $id ?>" class="glyphicon glyphicon-remove"></a></td></tr>
              <?php endforeach; ?>
              <tr>
              <td colspan="5" align="right"><b>Total:</b></td>
              <td>$<?php echo $total; ?></td>
              </tr>
             
</table>
</div>

<div class="panel-footer">
<a href="clear.php" class="btn btn-danger">Clear Cart</a>&nbsp;
<a href="index.php" class="btn btn-default">Back</a>&nbsp;
<a href="submit-order.php" class="btn btn-primary">Submit Order</a>&nbsp;
</div>

<?php else: ?>
<h3 class="text-danger lead text-center">You Select no products now!</h3>
<p class="text-center"><a href="index.php" class="btn btn-info">Shop Now</a></p>
<?php endif; ?>

<? include('footer.php');?>