<?php
include 'nav.php'; 
include 'admin/connect.php';
global  $connection;
global $connect;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  <script src="assets/popper.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
   <title>Green Plant</title>
 <link href="images/gplogo.png" rel="icon" type="image" />
  <style>
  .carousel-inner img {
      width: 100%;
      height: 100%;
	#ad{display:block}  
  }
  </style>
</head>
<body>




<div id="demo" class="carousel slide" data-ride="carousel" style="margin-top:4em">

  <!-- Indicators -->
  <ul class="carousel-indicators">
     <?php 
	$query="select * from slidephoto";
			$ch_query=mysqli_query($connect,$query);
			$count=mysqli_num_rows($ch_query);
			$i=0;
			while($i<$count)
			{
				if($i==0){
				echo' <li data-target="#demo" data-slide-to="$i" class="active"></li>';}
				
				else{
				echo' <li data-target="#demo" data-slide-to="$i"></li>';	
					}
				$i++;
				}
			
			if(!$ch_query)
				{
						die("QUERY FAILED".mysqli_error($connection));
				}
			
	?>
    
  </ul>
  
  <!-- The slideshow -->
  <div class="container">
  <div class="carousel-inner">
  <?php
  $query="select * from slidephoto limit 1";
  $ch_query=mysqli_query($connect,$query);
  while($out=mysqli_fetch_array($ch_query))
  {
	  $firstphoto=$out['photo'];
	   echo " 
	  <div class='carousel-item active'>
    <div class='container'>
      <img src='images/{$firstphoto}' width='1100' height='500'>
     </div> 
    </div>";
  }
  
   $query="select * from slidephoto where photo!='$firstphoto'";
  $ch_query=mysqli_query($connect,$query);
  while($out=mysqli_fetch_array($ch_query))
  {
	  $firstphoto=$out['photo'];
   echo " 
	  <div class='carousel-item '>
    <div class='container'>
      <img src='images/{$firstphoto}' width='240' height='120'>
     </div> 
    </div>";
  
  }
  ?>
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

<div class="container" style="margin-bottom:1em">
<div class="row">

 <div class="col-sm-12 col-md-4 col-lg-3">
 <?php
 include 'sitebar.php';
 ?>
 
 </div>

	<div class="col-sm-12 col-md-8 col-lg-9" style="border-radius:5px">
   
 	 <div class="well well-lg" style="box-sizing:border-box;padding:1em;background-color:rgba(176,191,242,0.3);border-radius:5px">
     <div class="row">
        
        	
            <?php
			$sere="select distinct series from product";
			$pp=mysqli_query($connection,$sere);
			while($out=mysqli_fetch_array($pp))
			{
				$ppp=$out['series'];
			
				if(isset($_POST[$ppp]))
			 	{
					$_SESSION['add']=$ppp;
					}
			}	
			
			$add=$_SESSION['add'];
			$scat="select * from product where series='$add' && qty!='0'";
			$tt=mysqli_query($connection,$scat);
			$count_result=mysqli_num_rows($tt);
			if($count_result==0){
			  echo '<div class="well well-lg">Sorry,no results found!<a href="index.php">Back</a></div>';
		 }elseif($count_result>0)
		 {
			while($out=mysqli_fetch_array($tt))
				{
						
				    $product_id=$out['productid'];
					$product_name=$out['productname'];
					$category_id=$out['categoryid'];
					$price=$out['price'];
					$qty=$out['qty'];
					$photo=$out['photo'];
					$display='<div class="col-sm-12 col-md-12 col-lg-6"  style="margin-bottom:2em"><div class="thumbnail">';
					$display.="<div><h3 style='color:#023860'>{$product_name}</h3></div><hr>";
					$display.="<img src='images/{$photo}' class='img-fluid' width='350' height='350'>";
					$display.="<div class='container' style='margin-top:10px'><div class='row'>";
					$display.='<div class="col-2 btn btn-danger" title="Click here for details" data-toggle="popover" data-trigger="hover"><a href="detail.php?pid='.$product_id.'"  style="text-decoration:none;color:black"><span><i class="fa fa-search-plus"></i></span></a></div>';
					$display.="<div class='col-4 btn btn-secondary'><span><i class='fa fa-dollar' style='color:gold'></i> {$price} </span></div>";
					$display.='<div class="col-5"><span><a href="addtocart.php?id='.$product_id.'" class="btn btn-primary">Add-to <i class="fa fa-shopping-cart"></i></a></span></div>';
					$display.='</div></div>';
					$display.="</div></div>";
					echo $display;
	
				 }
		 
			
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


