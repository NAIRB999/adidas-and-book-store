

<?php
 session_start();
 global $connection;
 include ('function.php');
 include ('conn.php');
 include ('header.php');
 include ('footer.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap.css"/>
<script type="text/javascript" src="../assets/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../assets/bootstrap.js"></script>
<style>
#ss{display:none}
</style>
<script>
$(document).ready(function() {
   
	$("#series").click(function(){
        $("#ss").toggle();
				
    });
	
		    
});
</script>
</head>

<body style="background-color:#cecfe9">
<?php
 if(isset($_GET['action'])&&$_GET['action']=='edit'){
	 $p_id=$_GET['p_id'];
$query="select * from product where productid='$p_id'
	 ";
	 $go_query=mysqli_query($connection,$query);
	 while($row=mysqli_fetch_array($go_query)){
		 $product_id=$row['productid'];
		 $product_name=$row['productname'];
		 $product_cat_id=$row['categoryid'];
		 $price=$row['price'];
		 $qty=$row['qty'];
		 $photo=$row['photo'];
		 $series=$row['series'];
		 $info=$row['info'];
	 }
 }
?>

<div class="container-fluid" style="padding-top:1em">
  <div class="row" style="background-color:#cecfe9;background-size:100%;background-repeat:repeat-y;background-attachment:fixed;background-origin:border-box;padding-top:1em;padding-bottom:1em;color:#000;font-weight:600">
  <div class="col-md-3"></div>
    <div class="col-md-8 "> 
    
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
    
    <?php
if(isset($_POST['update_product']))
{ update_product(); }

?>
    
    <div class="row">
    <div class="col-md-10">
    <form action="" method="post" enctype="multipart/form-data">
    
  <div class="form-group">
    <label>Category Name</label>
    <select name="category_id" class="form-control">
    <?php
	$query="select * from category";
	$go_query=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($go_query)){
		$cat_id=$row['categoryid'];
		$cat_name=$row['categoryname'];
		if($product_cat_id==$cat_id)
		{
			echo "<option value={$cat_id} selected='selected'>{$cat_name}</option>";
		}
		else
		{
			echo "<option value={$cat_id}>{$cat_name}</option>";
		}
		
	}
	
	?>
    </select>
  </div>
   
   <div class="form-group">
    
    <label>Product Name</label>
    <input type="text" name="product_name" class="form-control" required="required" value="<?php echo $product_name;?>" />
  </div>
  
  <div class="form-group" >
    <label>Series</label><input type="checkbox" id="series" />
    <input type="text" name="series" class="form-control" id="ss" value="<?php echo $series;?> "/>
   </div> 
  
   
  <div class="form-group">
    <label>Price</label>
    <input type="text" name="price" class="form-control" required="required" value="<?php echo $price;?>"  />
  </div>
  
  <div class="form-group">
    <label>Quantity</label>
    <input type="text" name="qty" class="form-control" required="required" value="<?php echo $qty;?>"  />
  </div>
  
   <div class="form-group">
    <label>Information</label>
    <textarea name="info" class="form-control" required="required" rows="10" ><?php echo $info;?></textarea>
  </div
  
  ><div class="form-group">
    <label>File input</label>
    <input type="file" name="photo"  />
    <img src="../images/<?php echo $photo ?>" width="100" height="100" />
    <br />
    <button type="submit" name="update_product" class="btn btn-primary">Update</button>
  </div>
  
  
    </form>
  
    </div>
    </div>
    
</div>
</div>
</div>

</body>
</html>