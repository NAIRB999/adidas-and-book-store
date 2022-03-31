<?php
session_start();
include 'admin/conn.php';
include 'admin/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="assets/bootstrap.css"/>
<script type="text/javascript" src="assets/jquery-1.10.2.js"></script>
<script type="text/javascript" src="assets/bootstrap.js"></script>
</head>

<body>
<?php
 include 'header.php'
?>
  <div class="container Cus Top" style="margin-top:80px;">
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
					   }
					 ?>
                 </span>
                </h3>
             </div>
              <div class="row">
              <div class="col-sm-3">
                 <?php include 'sidebar.php';?>
              </div>
               <div class="col-sm-9">
                 <?php
				   if(isset($_POST['s_submit'])){
					   show_result();
				   }
				 ?>
               </div>
              </div>
       </div>
     </div>
  </div>
  
</body>
</html>