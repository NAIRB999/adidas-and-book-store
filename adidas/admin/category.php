<?php
 session_start();
 global $connection;
 include('function.php');
 include ('conn.php');
if(isset($_GET['action']) && $_GET['action']=='delete'){
	del_category();
}
if(isset($_POST['updatecategory'])){
	update_category();
}

        ?>
        <!DOCTYPE html>
<?php
include('header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Category
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Category</li>
      </ol>
    </section>
    
    <!-- Main content -->
     <?php
  		if(isset($_POST['add_category']))
		{
	insert_category();
		}
  ?>
  
    <section class="content container-fluid">


	<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="page-header">
      
       <span class="text-danger">
       
     <?php /*?>  <?php
	   if(isset($_SESSION['admin'])){
		   echo $_SESSION['admin'];
		   
	   }
	   else{
		   $_SESSION['admin']='';
	   }
	   ?><?php */?></span></h2>
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
    <form method="post">
    <div class="form-group">
    <label>Add Category</label>
    <input type="text" name="cat_name" class="form-control" />
    </div>
    <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
    </form>
    <hr/>
  <hr />
    <?php if(isset($_GET['action']) && $_GET['action']=='edit'){
		$cat_id=$_GET['c_id'];
		$query="select * from category where categoryid='$cat_id'";
		$go_query=mysqli_query($connection,$query);
		while($out=mysqli_fetch_array($go_query)){
			$catname=$out['catname'];
	?>		
    <form method="post">
    <div class="form-group">
   <label>Update_Category</label>
   <input type="text" name="cat_name" class="form-control" required="required" value="<?php echo $catname ?>" />
  <button class="btn btn-primary" name="updatecategory"> Update Category</button>
  </div>
  
    </form>
    <?php }
	}
	?>
            </div>
            <div class="col-md-6">
            <table class="table table-hover">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
            </tr>
           <?php
			$query="select * from category";
			$go_query=mysqli_query($connection,$query);
			while($row=mysqli_fetch_array($go_query)){
				$cat_id=$row['categoryid'];
				$cat_name=$row['catname'];
				echo "<tr>";
				echo "<td>{$cat_id}</td>";
				echo "<td>{$cat_name}</td>";
				echo "<td><a href='category.php?action=delete&c_id={$cat_id}' onclick=\"return confirm('Are you sure?')\">
				X</a>||
				<a href='category.php?action=edit&c_id={$cat_id}'>Edit</a>
				</td>";
				echo "</tr>";}?>
    
            </table>
            </div>
            </div>
            </div>
            </div>
    
    
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
include('footer.php');
?>