<?php
	include('functions.php');
	include ('admin/conn.php');
	include 'nav.php';
	if(isset($_POST['login']))
	{ login(); }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/popper.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
</head>

<body>
    <div class="container" style="margin-top:5em">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><h4>Login</h4></div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
			<label>User name</label>
			<input class="form-control" required type="text" name="username" placeholder="Enter user name">
          </div>
          <div class="form-group">
			<label>Password</label>
			<input class="form-control" required type="password" name="password" placeholder="Enter password">
          </div>
          <button type="submit" name="login" class="btn btn-dark btn-block">Sign in</button>
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