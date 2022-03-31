<?php
session_start();
include'conn.php';
include'function.php';
?>
<?php
if(isset($_GET['action'])&&$_GET['action']=='edit'){
	$p_id=$_GET['p_id'];
	$query="Select * from product where productid='$p_id'";
	$go_query=mysqli_query($connection,$query);
		while($row=mysqli_fetch_array($go_query)){
			$product_id=$row['productid'];
			$product_name=$row['productname'];
			$product_cat_id=$row['categoryid'];
			$size=$row['size'];
			$price=$row['price'];
			$qty=$row['qty'];
			$photo=$row['photo'];
		}
}
			?>
<?php
include('header.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Product Update
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Product List</li>
      </ol>
    </section>
       <?php
if(isset($_POST['update_product']))
{ update_product(); }

?> 
<div class="row">
	<div class="col-md-6 col-md-offset-3">
   <form method="post" enctype="multipart/form-data">
  <div class="form-group">
  	<label>Product Name</label>
    <input type="text" name="product_name" value="<?php echo $product_name ?>" class="form-control" />
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Category Name</label>
    <select name="category_id" class="form-control">
    <?php
	$query="Select * from category";
	$go_query=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($go_query)){
		$cat_id=$row['catid'];
		$cat_name=$row['catname'];
		if($product_cat_id==$cat_id){
			echo"<option value={$cat_id}selected>{$cat_name}</option>";
		}else{
		echo"<option value={$cat_id}>{$cat_name}</option>";}
	}?>
    </select>
    </div>
     <div class="form-group">
    <label>Size</label>
    <input type="text" name="size" value="<?php echo $size; ?>" class="form-control" />
    </div>
    <div class="form-group">
    <label>Price</label>
    <input type="text" name="price" value="<?php echo $price; ?>" class="form-control" />
    </div>
    <div class="form-group">
    <label>Quantity</label>
    <input type="text" name="qty" value="<?php echo $qty; ?>" class="form-control" />
    </div>
    <div class="form-group">
    <label>File Input</label>
    <input type="file" name="photo" value="<?php echo $photo ?>" />
    <img src="../images/<?php echo $photo ?>" width="100" height="100" />
    </div>
    <button type="submit" name="update_product" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>

</div>

<?php
include('footer.php');
?>