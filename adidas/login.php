<?php
session_start();
include 'admin/conn.php';
include 'admin/function.php';
if(isset($_POST['login'])){
	$name=$_POST['username'];
	$password=$_POST['password'];
	
		$errors=array(
		'username'=>'',
		'password'=>''
		
		);
		if ($name==''){
			$errors['username']='This Field could not be empty';
		}
		if($password==''){
				$errors['password']='This field could not be empty';
		}
		 
				 $hpass=md5($password);
				 $query="select *from user";
				 $go_query=mysqli_query($connection,$query);
				while($out=mysqli_fetch_array($go_query)){
					$db_user_name=$out['username'];
					$db_password=$out['password'];
					$db_user_role=$out['role'];
					if($db_user_name==$name & $db_password==$hpass & $db_user_role=='admin'){
						$_SESSION['admin']=$name;
						header('location:admin/product.php');
					}
					elseif($db_user_name==$name && $db_password==$hpass){
						$_SESSION['user']=$name;
						header('location:index.php');
					}
					else
					{
						header('location:index.php');
					}
				}
}
						
					  
					 
?>
<?php
	include('header.php');
	?>
  <div class="container" style="margin-top:80px;">
     <div class="row">
       <div class="col-sm-12">
             <div class="well well-sm">
                <h3>Welcome
                 <span class="showname">
                     <?php 
					   if(!empty($_SESSION['user'])){
						    echo $_SESSION['user'];
					   }
					   else{
						   $_SESSION['user']='';
					   }
					 ?>
                 </span>
                </h3>
             </div>
             </div>
             
              <div class="row">
             <div class="col-md-8 col-md-offset-2">
             <form action="#" method="post" role="form" class="form-horizontal">
             
            <div class="form-group text-primary"> <lable class="control-lable col-md-2" >User Name:</lable>
             <div class="col-md-10">
             <input type="text" name="username" value="" class="form-control" id="username" placeholder="Enter user name" />
             
             </div>
             </div>
             
             
             
             
               <div class="form-group text-primary"> <lable class="control-lable col-md-2" >Password:</lable>
             <div class="col-md-10">
             <input type="password" name="password" value="" class="form-control" id="pwd" placeholder="Enter Password name" />
             
             </div>
             </div>
             
               <div class="form-group">
             <div class="col-md-offset-2 col-md-10">
             <button type="submit" class="btn btn-info" name="login">Sign In</button>
             </div>
             </div>
             </form>
             </div>
             </div>
             </div>
             </div></div>
</body>
</html>