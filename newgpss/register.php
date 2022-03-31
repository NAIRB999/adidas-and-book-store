<?php
include 'admin/conn.php';
include 'functions.php';
include 'nav.php';
if(isset($_POST['register'])){
	$customername=$_POST['username'];
	$customerpassword=$_POST['password'];
	$customerconfirm_password=$_POST['confirmpassword'];
	$customeremail=$_POST['email'];
	$customerphone=$_POST['phone'];
		$customeraddress=$_POST['address'];
		$error=array(
		'username'=>'',
		'password'=>'',
		'confirm_password'=>'',
		'match_password'=>'',
		'email'=>'',
		'phone'=>'',
		'address'=>'',
		);
		if ($customername==''){
			$error['username']='User Name must be enter';
		}else{
			if(strlen($customername)<3){
				$error['username']='User Name need to be longer';
			}
		}
		if($customerconfirm_password==''){
			$error['confirm_password']='This Field could not be empty';
			}else{
				if($customerpassword!=$customerconfirm_password){
			$error['$match_password']='Password Do not match';
				}
			}
			if($customerpassword==''){
				$error['password']='This field could not be empty';
			}else{
				if(strlen($customerpassword)<3){
					$error['password']='Password need to be longer';
				}
			}
			if($customeremail==''){
				$error['email']='This field could not be empty';
			}
			if($customerphone==''){
				$error['phone']='This field could not be empty';
			}
			if($customeraddress==''){
				$error['address']='This field could not be empty';
			}
			foreach($error as $key=>$value){
				if(empty($value)){
					unset($error[$key]);
				}
			}
			if(empty($error)){
				echo"<h3>Registration Success</h3>";
				create_accu();
			}
}
	?>			
			
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/popper.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">


</head>

<body>

 

		<div class="container" style="margin-top:6em">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><h4>Registeration</h4></div>
      <div class="card-body">
        <form action="#" method="post" class="form-horizontal">
             
            <div class="form-group text-primary"> <lable class="control-lable col-md-2">User Name:</lable>
             <div class="col-md-10">
             <input type="text" name="username" value="<?php if(isset($user_name)){ echo $user_name;} ?>" class="form-control" id="username" placeholder="Enter user name" />
             <lable class="text-danger"><?php echo isset($errors['username'])? $errors['username']:'' ?> </label>
             </div>
             </div>
             
             
             
               <div class="form-group text-primary"> <lable class="control-lable col-md-2">Password:</lable>
             <div class="col-md-10">
             <input type="password" name="password" value="<?php echo isset($password)?$password:'' ?>" class="form-control" id="password" placeholder="Enter Password" />
              <lable class="text-danger"><?php echo isset($errors['password'])? $errors['password']:'' ?> </label>
             </div>
             </div>
             
             
             
               <div class="form-group text-primary"> <lable class="control-lable col-md-2">Confirm Password:</lable>
             <div class="col-md-10">
             <input type="password" name="confirmpassword" value="<?php echo isset($confirm_password)?$confirm_password:'' ?>" class="form-control" id="confirmpassword" placeholder="Enter Password again" />
             <lable class="text-danger"><?php echo isset($errors['confirm_password'])? $errors['confirm_password']:'' ?> </label>
              <lable class="text-danger"><?php echo isset($errors['match_password'])? $errors['match_password']:'' ?> </label>
             </div>
             </div>
             
             
             
              <div class="form-group text-primary"> <lable class="control-lable col-md-2">Email:</lable>
             <div class="col-md-10">
             <input type="email" name="email" value=" <?php echo isset($email)?$email:'' ?>" class="form-control" id="email" placeholder="Enter your email" />
              <lable class="text-danger"><?php echo isset($errors['email'])? $errors['email']:'' ?> </label>
             </div>
             </div>
             
             
             
              <div class="form-group text-primary"> <lable class="control-lable col-md-2">Phone:</lable>
             <div class="col-md-10">
             <input type="text" name="phone" value="<?php echo isset($phone)?$phone:'' ?>" class="form-control" id="phone" placeholder="Enter your Phone Number" />
              <lable class="text-danger"><?php echo isset($errors['phone'])? $errors['phone']:'' ?> </label>
             </div>
             </div>
             
             
             
              <div class="form-group text-primary"> <lable class="control-lable col-md-2">Address:</lable>
             <div class="col-md-10">
            <textarea name="address" value="<?php echo isset($address)?$address:'' ?>" class="form-control"  placeholder="Your Current Address" /></textarea>
             <lable class="text-danger"><?php echo isset($errors['address'])? $errors['address']:'' ?> </label>
             </div>
             </div>
             
             <label class="text-primary"></label>
             <div class="form-group">
             <div class="col-md-offset-2 col-md-10">
             <button type="submit" class="btn btn-dark" name="register">Sign Up</button>
             </div>
             </div>
         
             
             
             
             </form>
        
      </div>
    </div>
  </div>

     
<div class="well" style="margin-top:6em">
 <footer class="s-f">
      <div class="container-fluid">
        <div class="text-center">
          <small>Copyright © <script>document.write(new Date().getFullYear())</script> Green Plant</small>
        </div>
      </div>
    </footer>
</div>
 <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>