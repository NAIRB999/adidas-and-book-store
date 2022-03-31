                     
<?php
session_start();
global $connection;
include('conn.php');
include('function.php');
include ('header.php');
include ('footer.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="../assets/style.css"/>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap.css"/>
<script type="text/javascript" src="../assets/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../assets/bootstrap.js"></script>
<style>
.customer tr:nth-child(even){background-color:rgba(144,202,244,0.3)}
.customer tr:nth-child(odd){background-color:rgba(248,246,247,0.3)}
#tab {display:block}
</style>
</head>

<body style="background-color:#cecfe9">

  <div class="container-fluid" style="padding-top:1em">
  <div class="row" style="background-color:#cecfe9;background-size:100%;background-repeat:repeat-y;background-attachment:fixed;background-origin:border-box;padding-top:1em;color:#000;font-weight:600">
  <div class="col-md-2"></div>
    <div class="col-md-10" style="padding-left:20px"> 
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
    <div class="col-lg-10"> 
    <form method="post">
    <button class="btn btn-success" name="update" id="slide"> Show All</button></form>
    </div>
    <div class="col-lg-2">
        <a href="product.php" > <button class="btn btn-danger" name="Update_Category"> Add Produtct</button></a>  
    </div>
    </div>
    
    
    <div class="row">
    <div class="col-lg-12" style="line-height:40px">
        
    <?php        
            $query="select * from category ";
		$go_query=mysqli_query($connection,$query);
		    while($out=mysqli_fetch_array($go_query)){
			$catename=$out['categoryname'];
			$cateid=$out['categoryid'];
			?>	
            <form method="post"> 	
			<button class="btn btn-primary" name="<?php echo $cateid; ?>" > <?php echo $catename ?></button>
           
	<?php
		}
   ?>
   </form>
   </div>
    
    </div>
    
    
    
    
    <div class="row table-responsive" >
     <div class="col-lg-12"> 
     
     <table class="table customer" style="color:#000;font-size:15px" id="tab">
  
  <tr>
    <th>photo</th>
    <th>productid</th>
    <th>productname</th>
    <th>categoryname</th>
    <th>series</th>
    <th>price</th>
    <th>quantity</th>
    <th>information</th>
    <th>action</th>
  </tr>
   <?php
   $query="select product.*,category.* from product,category where product.categoryid=category.categoryid order by productid desc
	 ";
	 $go_query=mysqli_query($connection,$query);
	 while($row=mysqli_fetch_array($go_query)){
		 $product_id=$row['productid'];
		 $product_name=$row['productname'];
		 $cat_name=$row['categoryname'];
		 $series=$row['series'];
		 $price=$row['price'];
		 $qty=$row['qty'];
		 $info=$row['info'];
		 $photo=$row['photo'];
		 
		 echo "<tr>";
		 echo "<td><img src='../images/{$photo}' width='100' height='100'></td>";
		 echo "<td>{$product_id}</td>";
		 echo "<td>{$product_name}</td>";
		 echo "<td>{$cat_name}</td>";
		 echo "<td>{$series}</td>";
		 echo "<td>{$price}</td>";
		 echo "<td>{$qty}</td>";
		 echo "<td>{$info}</td>";
		 echo "<td><a href='productlist.php?action=delete&p_id={$product_id}' style='color:red' onclick=\"return confirm('Are you sure?')\"><i class='fa fa-trash'></i>
		 </a> || 
		 <a href='edit.php?action=edit&p_id={$product_id}' style='color:green'><i class='fa fa-edit'></i></a>
		 </td>";
		 echo "</tr>";
		 
	 } ?>
     </table> 
     
  <?php
  if(isset($_GET['action'])&&$_GET['action']=='delete'){
	  del_product();
  }
 if(isset($_POST['update'])){
	 echo "<script>document.getElementById('tab').style.display = 'none';</script>";	 
	echo " <table class='table customer' style='color:#000;font-size:15px' >
  
  <tr>
    <th>photo</th>
    <th>productid</th>
    <th>productname</th>
    <th>categoryname</th>
    <th>series</th>
    <th>price</th>
    <th>quantity</th>
    <th>information</th>
    <th>action</th>
  </tr>";
	
     $query="select product.*,category.* from product,category where product.categoryid=category.categoryid order by productid desc
	 ";
	 $go_query=mysqli_query($connection,$query);
	 while($row=mysqli_fetch_array($go_query)){
		 $product_id=$row['productid'];
		 $product_name=$row['productname'];
		 $cat_name=$row['categoryname'];
		 $series=$row['series'];
		 $price=$row['price'];
		 $qty=$row['qty'];
		 $info=$row['info'];
		 $photo=$row['photo'];
		 
		 echo "<tr>";
		 echo "<td><img src='../images/{$photo}' width='100' height='100'></td>";
		 echo "<td>{$product_id}</td>";
		 echo "<td>{$product_name}</td>";
		 echo "<td>{$cat_name}</td>";
		 echo "<td>{$series}</td>";
		 echo "<td>{$price}</td>";
		 echo "<td>{$qty}</td>";
		 echo "<td>{$info}</td>";
		 echo "<td><a href='productlist.php?action=delete&p_id={$product_id}' style='color:red' onclick=\"return confirm('Are you sure?')\"><i class='fa fa-trash'></i>
		 </a> || 
		 <a href='edit.php?action=edit&p_id={$product_id}' style='color:green'><i class='fa fa-edit'></i></a>
		 </td>";
		 echo "</tr>";
		 
	 }
	 
 }
 $query="select * from category ";
 $go_query=mysqli_query($connection,$query);
  while($row=mysqli_fetch_array($go_query)){
 $aa=$row['categoryid'];
 }
  global $aa;
 $i=1;
 while($i<=$aa)
 {
 	
	if(isset($_POST[$i]))
 	{
		echo "<script>document.getElementById('tab').style.display = 'none';</script>";
		echo " <table class='table customer' style='color:#000;font-size:15px'>
  
  <tr>
    <th>photo</th>
    <th>productid</th>
    <th>productname</th>
    <th>categoryname</th>
    <th>series</th>
    <th>price</th>
    <th>quantity</th>
    <th>information</th>
    <th>action</th>
  </tr>";
		
	 $query="select product.*,category.* from product,category  where product.categoryid=$i && category.categoryid=$i order by productid desc";
	 $go_query=mysqli_query($connection,$query);
	$query="select product.*,category.* from product,category  where product.categoryid=$i && category.categoryid=$i order by productid desc ";
	 $go_query=mysqli_query($connection,$query);
	 while($row=mysqli_fetch_array($go_query))
	 {
		 $product_id=$row['productid'];
		 $product_name=$row['productname'];
		 $cat_name=$row['categoryname'];
		 $series=$row['series'];
		 $price=$row['price'];
		 $qty=$row['qty'];
		 $photo=$row['photo'];
		 $info=$row['info'];
		 
		 echo "<tr>";
		 echo "<td><img src='../images/{$photo}' width='100' height='100'></td>";
		 echo "<td>{$product_id}</td>";
		 echo "<td>{$product_name}</td>";
		 echo "<td>{$cat_name}</td>";
		 echo "<td>{$series}</td>";
		 echo "<td>{$price}</td>";
		 echo "<td>{$qty}</td>";
		 echo "<td>{$info}</td>";
		 echo "<td><a href='productlist.php?action=delete&p_id={$product_id}' style='color:red' onclick=\"return confirm('Are you sure?')\"><i class='fa fa-trash'></i>
		 </a> || 
		 <a href='edit.php?action=edit&p_id={$product_id}' style='color:green'><i class='fa fa-edit'></i></a>
		 </td>";
		 echo '</tr>';
	 
	 }
	 }

	  
 $i++;
}

  ?>
  </table>

<br />
    </div>
    </div>
 
 
 </div>   
</div>
</div>
</body>
</html>