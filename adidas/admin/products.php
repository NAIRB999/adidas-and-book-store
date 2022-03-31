<?php
session_start();
global $connection;
include('conn.php');
include('function.php');
?>
<?php
include('header.php');
?>
<?php
if(isset($_POST['add_product'])){
	add_product();
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Products
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Dashborad</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">

	<div class="row">
	<div class="col-md-12">
  <div class="box box-primary">
  <div class="box-header with-border">
  	<h3 class="box-title">Add Products</h3>
  </div>
   <form method="post" enctype="multipart/form-data">
   <div class="box-body">
  <div class="form-group">
  	<label>Product Name</label>
    <input type="text" name="productname" class="form-control" placeholder="Plz enter product name..." />
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Category Name</label>
    <select name="categoryid" class="form-control">
    <?php
	$query="Select * from category";
	$go_query=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($go_query)){
		$cat_id=$row['catid'];
		$cat_name=$row['catname'];
		echo"<option value={$cat_id}>{$cat_name}</option>";
	}?>
    </select>
    </div>
        <div class="form-group">
    <label>Size</label>
    <input type="text" name="size" class="form-control" placeholder="Plz enter size.." />
    </div>
    <div class="form-group">
    <label>Price</label>
    <input type="text" name="price" class="form-control" placeholder="Plz enter Price.." />
    </div>
    <div class="form-group">
    <label>Quantity</label>
    <input type="text" name="qty" class="form-control" placeholder="Plz enter quantity..." />
    </div>
    <div class="form-group">
    <label>File Input</label>
    <input type="file" name="photo" />
    </div>
    </div>
    <div class="box-footer">
    <button type="submit" name="add_product" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 <?php
include('footer.php');
?>