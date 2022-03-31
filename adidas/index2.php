<!doctype html>
<?php
session_start();
include 'admin/conn.php';
include 'admin/function.php';
$cat_id=$_GET['cat_id'];
$getquery="select * from product where categoryid='$cat_id'";
$perpage=8;
$go_query=mysqli_query($connection,$getquery);
$num=mysqli_num_rows($go_query);
$num=ceil($num/$perpage);
$page='';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Adidas</title>
  <style type="text/css"> 
	  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
	  height: 80%;
	  			  }
	.slider
	  {
		  width:90%;
		  margin: auto;
		  margin-top: 4%;
	  }
	  </style>
    
</head>



<body style="background:rgba(50,50,50,0.1);">
   <?php  include'header.php' ?>
<div class="slider">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/Adidas1.png" alt="New York" width="1200px" height="500px">
          
      </div>

      <div class="item">
        <img src="images/Adidas2.png" alt="Chicago" width="1200px" height="500px">
            
      </div>
    
      <div class="item">
     <img src="images/Adidas3.png" alt="Los Angeles" width="1200px" height="500px">
          </div>
                <div class="item">
     <img src="images/Lionel-Messi-Adidas-Commercial-HD-Wallpaper-Smile-Face.png" alt="Los Angeles" width="1200px" height="500px">
          </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="icon-prev"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="icon-next"></span>
            <span class="sr-only">Next</span>
    </a>
</div>
	</div>

<div class="container" style="margin-top: 10px;">
<div class="row">
      
       <div class="col-md-12">
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
                
                </div>
                </h1>
             </div>
             </div>
<div class="row">
<div class="col-md-3">
<?php include('sidebar.php');
	?>
</div>
	<div class="col-md-9">
		<?php
				 if (isset($_GET['page'])){
						$page=$_GET['page'];
						$show_product=($page*$perpage)-$perpage;
				 }
				 if(!isset($_GET['page'])){
					 $show_product=0;
				 }
				  		$query="select * from product where categoryid='$cat_id' limit $show_product,$perpage";
		 $go_query=mysqli_query($connection,$query);
		 $count_result=mysqli_num_rows($go_query);
		 if($count_result==0){
			  echo '<div class="well well-lg">Sorry,no results found!<a href="index.php">Back</a></div>';
		 }elseif($count_result>0){
			   while($out=mysqli_fetch_array($go_query)){
				    $product_id=$out['productid'];
					$product_name=$out['productname'];
					$category_id=$out['categoryid'];
					$price=$out['price'];
				   $size=$out['size'];
					$qty=$out['qty'];
					$photo=$out['photo'];
					$display='<div class="col-sm-3 col-md-3"><div class="thumbnail">';
					$display.="<img src='images/{$photo}'>";
					$display.='<div class="caption">';
					$display.="<h3>{$product_name}</h3>";
					$display.="<p>Price ={$price}ks</p>";
				   	$display.="<p>Size &nbsp;{$size}</p>";
					$display.='<p class="text-center"><a href="addtocard.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
					$display.="</div></div></div>";
					echo $display;
					
					
	
		 }
		 }
		 
   
   ?>
		
	</div>
	</div>
</div>
<ul class="pager">
					<?php
					for($i=1;$i<=$num;$i++){
						if($i==$page){
							echo "<li><a href='shoes.php?page={$i}'style='background:#000;color:#fff;'>{$i}</a></li>";
						}else
					
							echo "<li><a href='shoes.php?page={$i}'>{$i}</a></li>";
			   }
						
					?>
					</ul>
<?php if(isset($_POST['fsubmit'])){
	addfeedback();
}
?>
<div class="container-fluid">
<div class="col-md-12" >
<div class="row" >
             <div class="col-md-6">
            <p></p>
              <span style="font-family:'Comic Sans MS', cursive;  font-size:30px; color:fff;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;feedback <span style="font-size:16px;">(Feel Free To Us!)</span></span><p></p>

				<form class="form-horizontal" role="form" method="post">
  					<div class="form-group">
    						<label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" required/>
                </div>
  			</div>

  <div class="form-group">
            <label class="control-label col-sm-2">Comment </label>
            <div class="col-sm-10">
             <textarea class="form-control" name="comment" placeholder="Enter your comments!" required/></textarea><p></p>
              <button class="btn btn-default" name="fsubmit" type="submit">Send</button>
            </div><p></p>

            </form>


  </div>


  </div>
  <div class="col-md-6" >

					<p></p>

                         <span style="font-family:'Comic Sans MS', cursive; font-size:30px; color:fff;">Contact Us</span>
						<h5 style="  color:#000000;">&nbsp;&nbsp;Office Address</h5>
                       <h5 style="  color:#000000;"><span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino,
                         serif; font-size:24px;">&nbsp;&nbsp;S</span>.M.O <span style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:24px;">A</span>ddidas </h5>


					<span class="addresscolor glyphicon glyphicon-map-marker" style="  color:#000000;">
						No.30, DNH Tower, Pyay Road, SanChaung Township, Yangon.
						</span><p></p>
						<span  class="addresscolor glyphicon glyphicon-earphone" style="  color:#000000;">
							01-727673, 09-250368644, 09-452311007, 09-961575814
						</span><br><p></p>
						<span class="addresscolor glyphicon glyphicon-envelope" style="  color:#000000;">
							info@smo.addidasmyanmar.com
						</span>


			</div>


         </div>

		</div>


</div>

<p style="text-align:center; background:#fff; height:30px; font-weight:300px;">	&copy;Copyright 2017 S.M.O.com.mm. All rights reserved.</p>




<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>-->
</body>
</html>
