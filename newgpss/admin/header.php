
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

<body class="fixed-nav sticky-footer " id="page-top" >
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Green Plant Adminstration Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       <li>
       <hr>
          
        </li> 
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Category
            	<sup><i class="fa fa-fw" style="color:#09F2CF">                           
                            	<?php 
              						$total="select categoryid from category";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i></sup>
            </span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li >
              <a href="category.php" class="nav-link" >
              	<i class="fa fa-fw fa-plus"></i><span id="a">Add Category</span>
			  </a>
            </li>
         </ul>
        </li>
             
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Product">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-product-hunt"></i>
            <span class="nav-link-text">Products
            	<sup><i class="fa fa-fw" style="color:#4EC547">                           
                            	<?php 
              						$total="select productid from product";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i></sup>
			</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="product.php" class="nav-link" href="#">
              	<i class="fa fa-fw fa-plus"></i><span id="p1">Add Product</span>
			  </a>
            </li>
            
            <li>
              <a href="productlist.php"class="nav-link" href="#">
              	<i class="fa fa-fw fa-list"></i><span id="pl1">Product list</span>
			  </a>
            </li>
          </ul>
        </li>
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slidephoto">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComp" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-square"></i>
            <span class="nav-link-text">Slide Photo
            	<sup><i class="fa fa-fw" style="color:#4EC547">                           
                            	<?php 
              						$total="select slideid from slidephoto";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i></sup>
			</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComp">
            <li>
              <a href="addslidephoto.php" class="nav-link" href="#">
              	<i class="fa fa-fw fa-plus"></i><span id="p1">Add Slidephoto</span>
			  </a>
            </li>
            
            <li>
              <a href="slidelist.php"class="nav-link" href="#">
              	<i class="fa fa-fw fa-list"></i><span id="pl1">Slide list</span>
			  </a>
            </li>
          </ul>
        </li>
        
      
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Order">
          <a class="nav-link "  href="order_mgmt.php">
            <i class="fa fa-fw fa-shopping-bag"></i>
            <span class="nav-link-text">Orders
            	<sup><i class="fa fa-fw" style="color:#DEB407">                           
                            	<?php 
              						$total="select orderid from orders";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i></sup>
            </span>
          </a>
        </li> 
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Delivery Record">
          <a class="nav-link "  href="deliveryrecord.php">
            <i class="fa fa-fw fa-car"></i>
            <span class="nav-link-text">Delivery Record
            	<sup><i class="fa fa-fw" style="color:#DFC4EA">                           
                            	<?php 
              						$total="select recordid from deliveryrecord";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i></sup>
            </span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
          <a class="nav-link"  href="userlist.php" >
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Customer List
            	<sup><i class="fa fa-fw" style="color:#1CC104">                           
                            	<?php 
              						$total="select userid from user";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i></sup>
            </span>
          </a>          
        </li> 
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin">
          <a href="adminlist.php" class="nav-link" >
            <i class="fa fa-fw fa-male"></i>
            <span class="nav-link-text">Admin
            	<sup><i class="fa fa-fw" style="color:#F2133A">                           
                            	<?php 
              						$total="select adminid from admin";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i></sup>
            </span>
          </a>          
         </li>
         
         
                      
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Feedback">
          <a class="nav-link"  href="feedback.php">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span class="nav-link-text">Feedback
            	<sup><i class="fa fa-fw" style="color:#F5E61F">                           
                            	<?php 
              						$total="select feedbackid from feedback";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i></sup>
            </span>
          </a>          
        </li> 
               
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">                     
        <li class="nav-item">
          <a href="dashboard.php" class="nav-link">
            <i class="fa fa-fw fa-home"></i>
		 </a>
        </li>                   
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  
  
 
   <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>   

	<script src="../js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../js/bootstrap-notify.js"></script>

	<script src="../js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="../js/demo.js"></script>
</body>

</html>
