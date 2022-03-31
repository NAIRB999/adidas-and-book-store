<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <title>Green Plant</title>
 <link href="images/gplogo.png" rel="icon" type="image" />
  <style>
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body  class="sticky-footer" id="page-top" >
<?php
 if(empty($_SESSION['user'])):
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#0b2444">
  <a class="navbar-brand" href="index.php"><sup><img src="images/gplogo.png" width="35px" height="35px"/></sup><span style="color:#CAFDBD;font-size:22px"> G<sub> r</sub> e<sup> e</sup> n  &nbsp;P<sub> l</sub> a<sup> n</sup> t <sup style="color:#D2A742;font-family:'Arial Black', Gadget, sans-serif"><img src="images/samsung1.png" width="60" height="30"</sup> Electric <sub style="color:#D2A742">Store</sub></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  
    <ul class="navbar-nav navbar-right">
     
      <li>
      	<form action="searchresult.php" class="form-inline" method="post">
    		<input class="form-control" name="search" type="text" placeholder="Search">
    		<button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
  		</form>
      </li>   
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link" href="index.php"><i class="fa fa-home fa-lg"></i></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="contactus.php">Contact Us</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i>Login</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="register.php"><i class="fa fa-registered"></i>Register</a>
    </li>
    </ul>
  	
    
  </div>  
</nav>

 <?php else: ?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#0b2444">
  <a class="navbar-brand" href="index.php"><sup><img src="images/gplogo.png" width="35px" height="35px"/></sup><span style="color:#CAFDBD;font-size:22px"> G<sub> r</sub> e<sup> e</sup> n  &nbsp;P<sub> l</sub> a<sup> n</sup> t <sup style="color:#D2A742;font-family:'Arial Black', Gadget, sans-serif"><img src="images/samsung1.png" width="60" height="30"</sup> Electric <sub style="color:#D2A742">Store</sub></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  
    <ul class="navbar-nav navbar-right">
     
      <li>
      	<form action="searchresult.php" class="form-inline" method="post">
    		<input class="form-control" type="text" placeholder="Search" name="search">
    		<button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
  		</form>
      </li>   
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link" href="cart.php"><img src="images/ico-cart.png" title="cart"/><sup style="color:#FC0">
    <?php
	if(empty($_SESSION['cart'])): 
	echo 0;
	?>
    
    <?php else: 
	
	echo $_SESSION['num'];
	?>
    
    <?php endif; ?>
    
     </sup></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="index.php"><i class="fa fa-home fa-lg"></i></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="contactus.php">Contact Us</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout<i class="fa fa-sign-out"></i></a>
    </li>
    </ul>
  	
    
  </div>  
</nav>

 <?php endif; ?>  

</body>
</html>


