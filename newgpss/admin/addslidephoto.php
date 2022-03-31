<?php
 session_start();
 include('function.php');
 include ('conn.php');
 include('header.php');
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

  <div class="container-fluid" style="padding-top:1em;padding-bottom:1em">
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
    
    <?php
if(isset($_POST['addslidephoto']))
{ addslidephoto(); }

?>
    
    <div class="row">
    <div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <label>File input</label>
    <input type="file" name="slidephoto"  />
  </div>
  
   <button type="submit" name="addslidephoto" class="btn btn-primary">Add slidephoto</button>
    
    </form>
     </div>
    </div>
    
</div>
</div>
</div>


</body>
</html>