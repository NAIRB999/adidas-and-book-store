<?php
session_start();
 global $connection;
 include 'function.php';
 include 'conn.php';
 include 'header.php';
 include 'footer.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap.css"/>
<script type="text/javascript" src="../assets/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../assets/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/style.css"/>
<body style="background-color:#cecfe9">

  <div class="container-fluid" style="padding-top:1em">
  <div class="row" style="background-color:#cecfe9;background-size:100%;background-repeat:repeat-y;background-attachment:fixed;background-origin:border-box;padding-top:1em;color:#000;font-weight:600">
  <div class="col-md-3"></div>
    <div class="col-md-8"> 
    <div class="row">   
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
        
           <div class="page-header" style="padding-left:1em">
       <h2>Welcome
       <span class="text-danger">
       
       <?php
	   if(isset($_SESSION['admin'])){
		   echo $_SESSION['admin'];
		   
	   }
	   else{
		   $_SESSION['admin']='';
	   }
	   ?></span></h2>
     
    </div>
            
        </li>        
      </ol>
    </div>


      <!-- Icon Cards-->
      <div class="row">
      
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-product-hunt"></i>
              </div>
              <div class="mr-5"> 
              	<i class="fa fa-fw">                           
                            	<?php 
              						$total="select productid from product";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i>
                Products!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="productlist.php">
              <span class="float-left"> <i class="fa fa-fw fa-product-hunt"></i> View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5"> 
              	<i class="fa fa-fw">                           
                            	<?php 
              						$total="select categoryid from category";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i>
                Categories!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="category.php">
              <span class="float-left"><i class="fa fa-fw fa-list"></i> View Details </span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-male"></i>
              </div>
              <div class="mr-5"> 
              	<i class="fa fa-fw">                           
                            	<?php 
              						$total="select adminid from admin";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i>
                Admin List!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="adminlist.php">
              <span class="float-left"> <i class="fa fa-fw fa-male"></i> View Details</span>
              <span class="float-right">
                
              </span>
            </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"> 
              	<i class="fa fa-fw">                           
                            	<?php 
              						$total="select userid from user";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i>
                Customer!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="userlist.php">
              <span class="float-left"><i class="fa fa-fw fa-users"></i> View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-3 ">
          <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-bag"></i>
              </div>
              <div class="mr-5"> 
              	<i class="fa fa-fw">                           
                            	<?php 
              						$total="select orderid from orders";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i>
                Orders!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="order_mgmt.php">
              <span class="float-left"><i class="fa fa-fw fa-shopping-bag"></i> View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-3 ">
          <div class="card text-white bg-secondary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-car"></i>
              </div>
              <div class="mr-5"> 
              	<i class="fa fa-fw">                           
                            	<?php 
              						$total="select recordid from deliveryrecord";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i>
                Deliver!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="deliveryrecord.php">
              <span class="float-left"><i class="fa fa-fw fa-car"></i> View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-3 ">
          <div class="card text-white  o-hidden h-100" style="background-color:#930">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-square"></i>
              </div>
              <div class="mr-5"> 
              	<i class="fa fa-fw">                           
                            	<?php 
              						$total="select slideid from slidephoto";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i>
                Slide-p!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="slidelist.php">
              <span class="float-left"><i class="fa fa-fw fa-square"></i> View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-3 ">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-newspaper-o"></i>
              </div>
              <div class="mr-5"> 
              	<i class="fa fa-fw">                           
                            	<?php 
              						$total="select feedbackid from feedback";
			  						$get_total=mysqli_query($connection,$total);
		      						$num=mysqli_num_rows($get_total);
			  						echo $num;
			  					?>
				</i>
                Feedback!
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="feedback.php">
              <span class="float-left"><i class="fa fa-fw fa-newspaper-o"></i> View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
     
       </div> 
    
    
   </div>
   </div>
   </div>





</body>
</html>