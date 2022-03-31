                     
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

</style>
</head>

<body style="background-color:#cecfe9">

  <div class="container-fluid" style="padding-top:1em">
  <div class="row" style="background-color:#cecfe9;background-size:100%;background-repeat:repeat-y;background-attachment:fixed;background-origin:border-box;padding-top:1em;color:#000;font-weight:600">
  <div class="col-md-3"></div>
    <div class="col-md-9" style="padding-left:20px"> 
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
    
    <div class="row" style="margin-bottom:10px">
    <div class="col-lg-9"> 
    </div>
    <div class="col-lg-2">
        <a href="addslidephoto.php" > <button class="btn btn-danger" name="Update_Category"> Add Slidephoto</button></a>  
    </div>
    </div>
    
    
    <div class="row table-responsive" >
     <div class="col-lg-12"> 
     
     <table class="table customer" style="color:#000;font-size:15px" >
  
  <tr>
    
    <th>slideid</th>
    <th >photo</th>
    <th>action</th>
  </tr>
   <?php
   $query="select * from slidephoto ";
	 $go_query=mysqli_query($connection,$query);
	 while($row=mysqli_fetch_array($go_query)){
		 $slide_id=$row['slideid'];
		 $photo=$row['photo'];
		 
		 echo "<tr>";
		 echo "<td>{$slide_id}</td>";
		 echo "<td><img src='../images/{$photo}' width='240' height='120'></td>";
		 echo "<td><a href='slidelist.php?action=delete&s_id={$slide_id}' style='color:red' onclick=\"return confirm('Are you sure?')\"><i class='fa fa-trash'></i>
		 </a> || 
		 <a href='slidechange.php?action=edit&s_id={$slide_id}' style='color:green'><i class='fa fa-edit'></i></a>
		 </td>";
		 echo "</tr>";
		 
	 } ?>
     </table> 
     
  

    </div>
    </div>
 
 
 </div>   
</div>
</div>
</body>
</html>