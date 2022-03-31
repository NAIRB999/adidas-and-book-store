<?php
include 'nav.php';
global  $connection;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/popper.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
  <style>
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  #aaa img:hover{transform:scale(1.6,1.8)}
  </style>
</head>
<body>

<div class="container" style="margin-top:4em">
<div class="row">

 <div class="col-lg-12 col-md-12 col-sm-12">
 <div class="container text-center">
 <hr/><h2>Visit Us</h2><hr/>
 </div>
 </div>
 
  <div class="col-lg-3 col-md-4 col-sm-12" style="margin-bottom:1em;">
   <div class="container" style="background-color:rgba(176,191,242,0.3);border-radius:5px" id="aaa">
   <h5 style="padding-top:5px">Green Plant Map</h5>
        <img src="images/map.png" class="img-fluid">
        </div>
  
        <div class="container" style="background-color:rgba(176,191,242,0.3);border-radius:5px;padding-top:1em">
       <hr> <h3>Opening Hours</h3><hr>
        <pre>
<b>Monday - Friday</b>
09:00am - 09:00pm

<b>Saturday &amp; Sunday</b>
09:00am - 07:00pm

        </pre>
        </div>
        
       
        
        </div>
        
        <div class="col-lg-6 col-md-8 col-sm-12" style="margin-bottom:1em;">
       
        <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top:1em">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="container">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="container">
      <img src="images/sam1.png" alt="Los Angeles" width="1100" height="500">
      </div>
    </div>
    <div class="carousel-item">
    <div class="container">
      <img src="images/sam2.png" alt="Chicago" width="1100" height="500">
    </div>
    </div>
    <div class="carousel-item">
    <div class="container">
      <img src="images/sam3.png" alt="New York" width="1100" height="500">
    </div>
    </div>
      
    
  </div>
 
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 </div>
</div>
    
    <div class="container">
    
    
    <div class="row" style="padding-top:2em;">
    <div class="col-3"><img src="images/y (1).png" class="img-fluid"></div>
    <div class="col-3"><img src="images/t (3).png" class="img-fluid"></div>
    <div class="col-3"><img src="images/e (4).png" class="img-fluid"></div>
    <div class="col-3"><img src="images/w (1).png" class="img-fluid"></div>
    </div>
    
    
    </div>
       
        </div>	
        
         <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom:1em;">
         <div class="container" style="padding:1em;background-color:rgba(176,191,242,0.3);border-radius:5px;padding-top:1em">
         <h3>Contact Details</h3><hr>
        <pre>
<b><u>Address</u></b>        
No.23 Kabaraye pagoda Road,
Mayangone Tsp, Myanmar
<hr>
<b><u>Email</u></b>
<a href="mailto:greenplant@gmail.com">greenplant@gmail.com</a>
<hr>
<b><u>Contact No</u></b>
﻿Tel : +95-09-434-334-333
      +95-01-213-351	
      
Fax 123-456-5679

<b>web:</b><a href="index.php">www.greenplant.com </a>
        </pre>
        </div>
        </div>	
            
    
    
   

</div>
</div>


 <?php
 include 'footer.php';
 ?>
</body>
</html>


