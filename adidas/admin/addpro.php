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
<?php include('header.php');?>
<?php
	if (isset($_post['addproduct'])){
		add_product();
		
		}
?>

		  <?php
	   if(isset($_SESSION['admin'])){
		   echo $_SESSION['admin'];
		   
	   }
	   else{
		   $_SESSION['admin']='';
	   }
	   ?>
       <!-- admin name -->
       
       </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          
        </div>
      </div>
      
      
      
      <!-- search form (Optional) -->
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Dashboard
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Dashborad</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">

	  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ADD Products</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label >Product Name</label>
                  <input type="text" class="form-control" name="productname" placeholder="Enter Product Name">
              
                </div>
               <div class="form-group">
                <label>Category Name</label>
                <select class="form-control select2" name="categoryid" style="width: 100%;">
               
                
                   <?php
                  
				  $query="select * from category";
				  $go_query=mysqli_query($connection,$go_query);
				  while($row=mysqli_fetch_array($go_query))
				  {
					  $cat_id=$row['catid'];
					  $cat_name=$row['catname'];
					  echo "<option value={$cat_id}>{$cat_name}</option>";
					  }
                  
                  ?>
                  </select>
              </div>
              
               <div class="form-group">
                  <label >Price</label>
                  <input type="text" class="form-control" name="price" placeholder="Enter Price">
              
                </div>
                  <div class="form-group">
                  <label >Quantity</label>
                  <input type="text" class="form-control" name="qty" placeholder="Enter Quantity">
              
                </div>
                <div class="form-group">
                  <label >File input</label>
                  <input type="file" name="photo" >

               
                </div>
               
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="addpro.php" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
			</div>
		  </div>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
<?php include('footer.php');?>