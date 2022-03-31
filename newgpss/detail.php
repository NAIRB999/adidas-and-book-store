<?php
include 'admin/conn.php';
include 'nav.php'; 
include 'functions.php';
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
  </style>
</head>
<body>

<div class="container" style="margin-top:6em">
<div class="row">

 
	<div class="col-sm-12 col-md-12 col-lg-12" style="border-radius:5px">
   
 	 <div class="well well-lg" style="box-sizing:border-box;padding:1em;background-color:rgba(176,191,242,0.3);border-radius:5px">
     <div class="row">
        
        	
            <?php
			$pid=$_GET['pid'];
			$sere="select * from product where productid='$pid'";
			$t=mysqli_query($connection,$sere);
			while($out=mysqli_fetch_array($t))
				{
						
				    $product_id=$out['productid'];
					$product_name=$out['productname'];
					$category_id=$out['categoryid'];
					$price=$out['price'];
					$qty=$out['qty'];
					$photo=$out['photo'];
					$in=$out['info'];
					$display='<div class="col-sm-12 col-md-12 col-lg-6 " style="margin-bottom:2em"><div >';
					$display.="<div><h3 style='color:#023860'>{$product_name}</h3></div><hr>";
					$display.="<img src='images/{$photo}' class='img-fluid border border-info rounded'>";
					$display.="</div></div>";
					echo $display;
					
					$display='<div class="col-sm-12 col-md-12 col-lg-6" style="padding-top:2em">';
					
					$display.="<div class='container' style='margin-top:10px'><div class='row'>";
					$display.="<div class='col-9'></div>";
					$display.='<div class="col-3 btn btn-light text-left" ><a href="index.php"  style="text-decoration:none;color:brown;padding-left:10px"><span>Go Shop <i class="fa fa-angle-double-right"></i> </span></a></div>';
					
					$display.="<div class='col-6 btn btn-secondary'><span><b>Price</b> - <i class='fa fa-dollar' style='color:gold'></i> {$price} </span></div>";
					$display.='<div class="col-6"><span><a href="addtocart.php?id='.$product_id.'" class="btn btn-primary">Add-to <i class="fa fa-shopping-cart"></i></a></span></div>';
					
					$display.="<div style='padding-top:1em;padding-bottom:1em'><hr><h3>Information Details</h3><hr><pre style='color:#023860;font-size:1em'>{$in}</pre><hr></div>";
					$display.='</div></div>';
					$display.='<div></div>';
					$display.="</div>";
					echo $display;
					
	
				 }
		
			
   ?>
              
        
      </div >
      
     </div>
	 
    </div>
    
    
   

</div>
</div>

<?php
include 'footer.php'; 
?>
</body>
</html>


