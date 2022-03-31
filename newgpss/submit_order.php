<?php 
	include 'admin/conn.php';
	include 'admin/function.php';
	include 'nav.php';
	include 'footer.php';
	if(!empty($_SESSION['user']))
		{
			$user_name=$_SESSION['user'];
			$query="select * from user where username='$user_name'";
			$go_query=mysqli_query($connection,$query);
			while($out=mysqli_fetch_array($go_query))
			{
				$user_id=$out['userid'];
				$user_name=$out['username'];
				$email=$out['email'];
				$phone=$out['phone'];
				$address=$out['address'];
			}
		}
		
		foreach($_SESSION['cart'] as $id=>$qty)
	{
		$getprice=mysqli_query($connection,"select * from product where productid='$id'");
		while($out=mysqli_fetch_array($getprice))
		{	$db_product=$out['productname'];
			$db_qty=$out['qty'];
		}
		if($db_qty<$qty)
		{
			echo"<script>window.alert('We left only {$db_qty} {$db_product} onhand. Sorry !')</script>";
			echo "<script>location.href = ('cart.php')</script>";
			}
	}
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
          
<div class="container" style="margin-top:1em">

<div class="well" style="margin-top:5em">   
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

    <div class="card card-login mx-auto mt-auto bg-light" style="margin-bottom:5em">
    
      <div class="card-header"><h4>Delivery Information</h4></div>
      <div class="card-body">
<form action="submit.php" method="post">
<div class="form-group ">
<label>User Name</label>
<input type="text" value="<?php if(isset($user_name)){echo $user_name;}?>" name="username" class="form-control" />
</div>

<div class="form-group">
<label>Email</label>
<input type="text" value="<?php if(isset($email)){echo $email;}?>" name="email" class="form-control" />
</div>

<div class="form-group">
<label>Phone</label>
<input type="text" value="<?php if(isset($phone)){echo $phone;}?>" name="phone" class="form-control" />
</div>

<div class="form-group">
<label>Address</label>
<textarea name="address" class="form-control">
<?php if(isset($address)){echo $address;}?>
</textarea>
</div>

<div class="form-group">
<label>Payment Type</label>
<select name="payment_type" class="form-control">
<option value="Master Card">Master Card</option>
<option value="Visa Card">Visa Card</option>
<option value="Credit Card">Credit Card</option>
</select>
</div>

<div class="form-group">
<label>CardNo:</label>
<input type="text" name="cardno" class="form-control" />
</div>

<div class="form-group">
<input type="hidden" value="<?php echo $user_id ?>" name="user_id" />
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>

</form>
</div>
</div>

</div>

</div>

</body>
</html>