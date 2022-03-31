<?php
 session_start();
 include('function.php');
 include ('conn.php');
 include ('header.php');
 include ('footer.php');
 if(isset($_GET['action'])&& $_GET['action']=='delete')
					   {
						   del_admin();
					   }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../assets/style.css"/>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap.css"/>
<script type="text/javascript" src="../assets/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../assets/bootstrap.js"></script>
<title>Untitled Document</title>
<style>
#customer tr:nth-child(even){background-color:rgba(144,202,244,0.3)}
#customer tr:nth-child(odd){background-color:rgba(248,246,247,0.3)}
</style>
</head>

<body style="background-color:#cecfe9">

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
  <!--  /* header */  -->   
   <!--  /* db call */  -->   
    	<div class="row" style="margin-left:3px;margin-right:3px">
        		<table class="table " style="color:#000;font-size:15px" id="customer">
                
                		<tr >
                        <td style="font-size:18px;color:#7C0E34">Admin List</t>
                        		<td colspan="3" align="right"><a href="register.php" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span> Add Admin</a></td>
                        </tr>
                        <tr>
                        	
                                		<th>Admin ID</th>
                                        <th>Admin Name</th>
                                        <th>Action</th>
                        
                        </tr>
                       <?php
					   
                       $query="Select * from admin order by adminid desc"; 
					   $go_query=mysqli_query($connection,$query);
					   		while($row=mysqli_fetch_array($go_query))
							{
								$user_id=$row['adminid'];
								$user_name=$row['adminname'];
								echo"<tr>";
								echo"<td>{$user_id}</td>";
								echo"<td>{$user_name}</td>";
								echo"<td><a href='adminlist.php?action=delete&id={$user_id}' 
								onclick=\"return confirm('Are You Sure?')\"><i class='fa fa-trash'></i></a></td>";
								
								echo"</tr>";
							}
								
					   ?>
                </table>
        </div>
        
        
        
              
        
        
  <!--  /* db call */  -->      

</body>
</html>