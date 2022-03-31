<?php
session_start();
global $connection;
include('conn.php');
include('function.php');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
include('header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Product list
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Product List</li>
      </ol>
    </section>
    
    
    
    <!-- Main content -->
    <section class="content container-fluid">
    <section class="content">
    <div class="row">
        <div class="col-xs-12">

		<div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>Photo</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Category Name</th>
                  <th>Size</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                
                <?php
  if(isset($_GET['action'])&&$_GET['action']=='delete'){
	  del_product();
  }
 
     $query="select product.*,category.* from product,category where product.categoryid=category.catid order by productid desc";
	  $go_query=mysqli_query($connection,$query);
					   		while($row=mysqli_fetch_array($go_query))
	 {
		 $product_id=$row['productid'];
		 $product_name=$row['productname'];
		 $cat_name=$row['catname'];
		 $size=$row['size'];
		 $price=$row['price'];
		 $qty=$row['qty'];
		 $photo=$row['photo'];
		 echo "<tbody>";
		 echo "<tr>";
		 echo "<td><img src='../images/{$photo}' width='100' height='100'></td>";
		 echo "<td>{$product_id}</td>";
		 echo "<td>{$product_name}</td>";
		 echo "<td>{$cat_name}</td>";
		 echo "<td>{$size}</td>";
		 echo "<td>{$price}</td>";
		 echo "<td>{$qty}</td>";
		 echo "<td><a href='prolist.php?action=delete&p_id={$product_id}' class='glyphicon glyphicon-remove' onclick=\"return confirm('Are you sure?')\"></a>||
		 <a href='edit.php?action=edit&p_id={$product_id}' class='glyphicon glyphicon-edit'></a>
		 </td>";
		 echo "</tr>";
		 echo " </tfoot>";
	 }
  ?>
  
  
  
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
		</section>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 <?php
	 include('footer.php');
	  ?>