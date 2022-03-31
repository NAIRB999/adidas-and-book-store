<?php
	session_start();
	include('function.php');
	include ('conn.php');
	if(isset($_POST['login']))
	{ admin_login(); }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Green Plant</title>
 <link href="../images/gplogo.png" rel="icon" type="image" />
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    	<a class="navbar-brand" href="login.php">Green Plant</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    	<ul class="navbar-nav ml-auto">
        	<li class="nav-item active">
         		<a class="nav-link" href="index.php">
            	<i class="fa fa-fw fa-sign-in"></i>Login</a>
        	</li>
        	<li class="nav-item">
         		<a class="nav-link" href="register.php">
            	<i class="fa fa-fw fa-registered"></i>Register</a>
        	</li>                             	
      	</ul>
     </nav>
    <br>
	<br>
	
    <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
			<label>User name</label>
			<input class="form-control" required type="text" name="adminname" placeholder="Enter user name">
          </div>
          <div class="form-group">
			<label>Password</label>
			<input class="form-control" required type="password" name="password" placeholder="Enter password">
          </div>
          <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
        </div>
      </div>
    </div>
  </div>
  
  <footer class="s-f">
      <div class="container-fluid">
        <div class="text-center">
          <small>Copyright © <script>document.write(new Date().getFullYear())</script> Green Plant</small>
        </div>
      </div>
    </footer>
    
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>