<?php 
	session_start();
	include 'admin/conn.php';
	include 'admin/function.php';
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
</head>

<body>
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
						   echo "no";
					   }
					 ?>
                 </span>
                </h3>
             </div>
             </div>
             
<div class="row">
<div class="col-md-6 col-md-offset-3">
<form action="submit.php" method="post">
<div class="form-group">
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
<select name="payment" class="form-control">
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