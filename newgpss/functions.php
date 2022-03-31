<?php 
function addfeedback()
	{
		global $connection;
		$count=0;
		$user_email=$_POST['email'];
		$user_name=$_POST['aa'];
		$user_comment=$_POST['comment'];
		$write_date=date("Y/m/d");
		$feed="select * from feedback ";
		$go=mysqli_query($connection,$feed);
		while($out=mysqli_fetch_array($go))
		{
			$test_name=$out['name'];
			$test_email=$out['email'];
			$test_comment=$out['comment'];
			if($test_name==$user_name&$test_email==$user_email & $test_comment==$user_comment)
			{
		$count++;
		}
		}
		if($count==0)
		{
					 $query="insert into feedback (name,date,email,comment)";
					  $query.="values ('$user_name','$write_date','$user_email','$user_comment')";
					   $go_query=mysqli_query($connection,$query);
					   if(!$go_query)
					   {
						   die("QUERY FAILED".mysqli_error($connection));
					   }
		}
		
   }

function login()
{
	global $connection;
	$name=$_POST['username'];
	$password=$_POST['password'];
	 $hpass=md5($password);
		$errors=array('username'=>'','password'=>'');
		if ($name==''){
			$errors['username']='This Field could not be empty';
		}
		if($password==''){
				$errors['password']='This field could not be empty';
		}
		 
		 $query="select * from user";
				 $go_query=mysqli_query($connection,$query);
				while($out=mysqli_fetch_array($go_query)){
					$db_user_name=$out['username'];
					$db_userpassword=$out['password'];
					if($db_user_name==$name & $db_userpassword==$hpass)
					{
						$_SESSION['user']=$name;
						echo "<script>location.href = 'index.php'</script>";
					}
					
					
				}
		 
		 
				 $query="select *from admin";
				 $go_query=mysqli_query($connection,$query);
				while($out=mysqli_fetch_array($go_query)){
					$db_admin_name=$out['adminname'];
					$db_adminpassword=$out['password'];
					if($db_admin_name==$name & $db_adminpassword==$hpass)
					{
						$_SESSION['admin']=$name;
						header('location:admin/dashboard.php');
					}
					
					
				}
				
				

	
	
	
	}
	
	
function create_accu(){
	   global $connection;
	     global $customername;
		   global $customerpassword;
		     global $customeremail;
			   global $customerphone;
			     global $customeraddress;
				 
				 $hpass=md5($customerpassword);
				 $query="select *from user where username='$customername' and password='$hpass'";
				 $user_query=mysqli_query($connection,$query);
				 $count=mysqli_num_rows($user_query);
				 if($count>0){
					 echo "<script>window.alert('already exists')</script>";
				 }
				 else{
					 $query="insert into user (username,password,email,phone,address)";
					  $query.="values ('$customername','$hpass','$customeremail','$customerphone','$customeraddress')";
					   $go_query=mysqli_query($connection,$query);
					   if(!$go_query){
						   die("QUERY FAILED".mysqli_error($connection));
					   }
					   else
					   {
						   echo "<script>window.alert('you successfully created an account')</script>";
					   }
				 }
   }
   
 
?>