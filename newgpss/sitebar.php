<?php
include 'admin/conn.php';
 include 'functions.php';
 if(isset($_POST['addfeedback']))
 
 	{
	 addfeedback();	 
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css"/>
<script type="text/javascript" src="assets/jquery.min.js"></script>
<script type="text/javascript" src="assets/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>
<script>
<?php 

echo '$(document).ready(function(){
    $(".a1").click(function(){
		$(".a1 li").slideToggle("slow");
		$(".a2 li").slideUp("slow");
		$(".a3 li").slideUp("slow");
    });
	
	$(".a2").click(function(){
        $(".a2 li").slideToggle("slow");
		$(".a1 li").slideUp("slow");
		$(".a3 li").slideUp("slow");
	});	
		
	$(".a3").click(function(){
        $(".a3 li").slideToggle("slow");
		$(".a2 li").slideUp("slow");
		$(".a1 li").slideUp("slow");	
		
    });
	
	$("#m").click(function(){
		$(".ab").show("slow");
		$("#m").hide();
	});
	
})';

?>
</script>
<style>
 li{list-style:none}
.a1 li{display:none;list-style:none}
.a2 li{display:none;list-style:none}
.a3 li{display:none;list-style:none}
.ab{display:none}
#m{display:block}
</style>


</head>

<body>



<div class="well" style="border-radius:5px;margin-bottom:1em;padding-top:1em;background-color:rgba(176,191,242,0.7)">

     <h4 style="padding-left:1em;color:#973506">Categories</h4><hr />
     
       <div class="row">
        <div class="col-sm-12" style="background-color:">  
          
      <ul>
      <?php 
			      $category="select * from category";
				  $go_query=mysqli_query($connection,$category);
				  while($out=mysqli_fetch_array($go_query)){
					  $db_cat_id=$out['categoryid'];
					  $catgo=$db_cat_id;
					  $db_cat_name=$out['categoryname'];
					  echo "<li>";
					  echo "<ul class='a{$db_cat_id}'><button class='btn btn-link' style='text-decoration:none;color:#106585;margin-left:-2em;font-size:24px'>{$db_cat_name}</button>";
					  
					   $subcategory="select DISTINCT series from product where categoryid='$db_cat_id'";
				 		$cc=mysqli_query($connection,$subcategory);
				  	 while($subout=mysqli_fetch_array($cc)){
					  $subseries=$subout['series'];
					  echo "<li><form method='post'><button class='btn btn-link' name='$subseries' style='text-decoration:none;color:#4B6006;margin-left:-1em;font-size:20px'>$subseries</button></li></form>";
					  
					}
					echo "</ul>";
					echo "</li>";
					
				  }?> 
      </ul>
      
       </div>  
       </div>
       
</div>


<div class="well " style="border-radius:5px;margin-bottom:1em;padding-top:1em;background-color:rgba(176,191,242,0.5)">
<div class="container">

	<div class="row">
    	<div class="col-12">
        <form method="post" >
        <div class="form-group text-center">
        <hr /><h3>Feedback</h3><hr />
         </div>
        <div class="form-group">
        <label>Comment</label>
        <textarea name="comment" class="form-control" rows="3" required>Some text...</textarea>
         </div>
       
        
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="aa" class="form-control" required placeholder="Enter user name">
        </div>
        
        <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" required placeholder="Enter user email">
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-dark" name="addfeedback">Submit</button>
         </div>
         
        </form>
        </div>
      </div>
      
</div>
</div>      
        
  <div class="well" style="border-radius:5px;margin-bottom:1em;padding-top:1em;background-color:rgba(176,191,242,0.4)">
<div class="container">

	<div class="row">      
        <div class="col-12">
        
        <div class="form-group">
       <h5>Earlier comments</h5><hr />
         </div>
        
         <?php
		$query="select * from feedback order by feedbackid desc limit 3";
		$go_query=mysqli_query($connection,$query);
		    while($out=mysqli_fetch_array($go_query))
			{
			$fid=$out['feedbackid'];
			$name=$out['name'];
			$date=$out['date'];
			$comment=$out['comment'];
			
		echo "<div class='form-group'>";
        echo "<span style='float:right' >{$date}</span>";
      	echo "<h5><i class='fa fa-user-circle'></i>{$name}</h5>";
		echo $comment;
		echo '</div><hr>';
		$count=$fid;
			}
			$new=$count-5;
			$count-=1;
			while($count>$new)
			{
				$query="select * from feedback where feedbackid='$count'";
				$go_query=mysqli_query($connection,$query);
		    	while($out=mysqli_fetch_array($go_query))
				{
				$fid=$out['feedbackid'];
				$name=$out['name'];
				$date=$out['date'];
				$comment=$out['comment'];
			
				echo "<div class='form-group ab'>" ;
       			echo "<span style='float:right'>{$date}</span>";
      			echo "<h5><i class='fa fa-user-circle'></i>{$name}</h5>";
				echo $comment;
				echo '<hr></div>';
				
			}
			
			$count=$count-1;
			}
			
		
						
		 ?>
           
        <div class="form-group">
  		<p id="m">more..</p>
        </div>
        
        </div>
    </div>
    
</div>
</div>


</body>
</html>