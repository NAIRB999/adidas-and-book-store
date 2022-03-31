<?php
session_start();
include 'admin/conn.php';
include 'functions.php';
include 'nav.php';
include 'footer.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="assets/bootstrap.css"/>
<script type="text/javascript" src="assets/jquery-1.10.2.js"></script>
<script type="text/javascript" src="assets/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="assets/style.css"/>
<style>
#cus tr:nth-child(even){background-color:rgba(144,202,244,0.3)}
#cus tr:nth-child(odd){background-color:rgba(248,246,247,0.3)}
</style>
</head>

<body style="background-color:rgba(176,191,242,0.3)">
<div class="well well-lg" style="box-sizing:border-box;padding-top:2em;background-color:rgba(176,191,242,0.3);border-radius:5px">
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
     
    </div>
            
        </li>        
      </ol>
    </div>
</div>

<div class="container">            
             <div class="row">
             <div class="col-12">
             <div class="panel panel-success"> 
             <div class="panel-heading">
             <h2>Shopping Cart</h2>
             
             </div>
             <?php
			 if(!empty($_SESSION['cart'])): 
			  ?>
           
             <div class=" panel-body">
             <table class="table table-condensed" id="cus">
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
             <td><img src="images/<?php echo $row['photo'] ?>" width="100" height="70" /></td>
             <td><?php echo $row['productname'] ?></td>
             <td><?php echo $qty ?>
             
             <span>
             <a href="increase_qty.php? id=<?php echo $id ?>" ><i class="fa fa-plus-circle"></i></a>
               <a href="decrease_qty.php?id=<?php echo $id ?>" ><i class="fa fa-minus-circle"></a></span></td>
             <td><?php echo "<i class='fa fa-dollar' style='color:blue'></i> ".$row['price'] ?> </td>
			 <td><?php echo "<i class='fa fa-dollar' style='color:blue'></i> ".$row['price'] *$qty ?> </td>
             <td>
             <span style="margin:5px"></span>
              <a href="remove.php?id=<?php echo $id ?>"><i class="fa fa-trash"></i></a></td></tr>
              <?php endforeach; ?>
              <tr>
              <td colspan="5" align="right"><b>Total:</b></td>
              <td><?php echo "<i class='fa fa-dollar' style='color:blue'></i> ".$total; ?></td>
              </tr>
             
</table>
</div>

<div class="panel-footer" style="margin-bottom:2em">
<a href="clear.php" class="btn btn-danger">Clear Cart</a>&nbsp;
<a href="index.php" class="btn btn-default">Back</a>&nbsp;
<a href="submit_order.php" class="btn btn-primary">Submit Order</a>&nbsp;
</div>

<?php else: ?>

<h3 class="text-danger lead text-center">You Select no products now!</h3>
<p class="text-center"><a href="index.php" class="btn btn-info">Shop Now</a></p>
<?php endif; ?>

             
			 
			 
		
			
             </div>
             </div>
             </div>
             </div>
             

</body>
</html>