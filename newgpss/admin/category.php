<?php
 session_start();
 global $connection;
 include ('function.php');
 include ('conn.php');
 include ('header.php');
 include ('footer.php');
if(isset($_GET['action']) && $_GET['action']=='delete'){
	del_category();
}
if(isset($_POST['Update_Category'])){
	update_category();
	echo "<script>location.href('category.php')</script>";
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap.css"/>
<script type="text/javascript" src="../assets/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../assets/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../../gift shop/assets/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body style="background-color:#cecfe9">
<?php
if(isset($_POST['add_category'])){
	insert_category();
}?>

<div class="container-fluid" style="padding-top:1em">
  <div class="row" style="background-color:#cecfe9;background-size:100%;background-repeat:repeat-y;background-attachment:fixed;background-origin:border-box;padding-top:1em;color:#000;font-weight:600">
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
  
    <?php 
	if(isset($_GET['action']) && $_GET['action']=='edit')
	{
		$cat_id=$_GET['c_id'];
		$query="select * from category where categoryid='$cat_id'";
		$go_query=mysqli_query($connection,$query);
		while($out=mysqli_fetch_array($go_query)){
			$catname=$out['categoryname'];
	?>		
    <form method="post" >
    <div class="form-group ">
   <label>Update Category</label>
   <input type="text" name="cat_name" class="form-control" required="required" value="<?php echo $catname ?>" />
   </div>
   <button class="btn btn-primary" name="Update_Category"> Update </button>
  
    </form>
    <?php }
	}
	?>
        </div>
            
            <div class="col-md-6">
            <table class="table table-hover" style="color:#000">
            <tr style="font-size:17px">
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
            </tr>
           <?php
			$query="select * from category";
			$go_query=mysqli_query($connection,$query);
			while($row=mysqli_fetch_array($go_query)){
				$cat_id=$row['categoryid'];
				$cat_name=$row['categoryname'];
				echo "<tr>";
				echo "<td>{$cat_id}</td>";
				echo "<td>{$cat_name}</td>";
				echo "<td><a href='category.php?action=delete&c_id={$cat_id}' style='color:red' onclick=\"return confirm('Are you sure?')\">
				X </a> || 
				<a href='category.php?action=edit&c_id={$cat_id}'>Edit</a>
				</td>";
				echo "</tr>";}?>
    
            </table>
            </div>
 </div>
 
      </div>
      </div>
      </div>




</body>
</html>