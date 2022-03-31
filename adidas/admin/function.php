<?php
  function add_user(){
	global $connection;
	$user_name=$_POST['username'];
	$password=$_POST['password'];
	$cpass=$_POST['comfirmpassword'];
	if($password!=$cpass)
	{echo "<script>window.alert('Password and ConfirmPassword are must be same')</script>";}
	elseif ($password!="" && $user_name!="")
	{
		$query="select * from user where username='$user_name' and password='$password'";
		$ch_query=mysqli_query($connection,$query);
		$count=mysqli_num_rows($ch_query);
		if($count>0){
			echo"<script>window.alert('This User is already exists')</script>";
		}
		else{
		$hashvalue=md5($password);
		$user_role=$_POST['usertype'];
		$query="insert into user(username,password,role)";
		$query.="values('$user_name','$hashvalue','$user_role')";
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){
			die("QUERY FAILED".mysqli_error($connection));
		}
		else{
		echo "<script>window.location.href='userlist.php'</script>";
	}
	}
}
}
	 function del_user()
	 {
		 	global $connection;
			$u_id=$_GET['id'];
			echo $u_id;
			$query="delete from user where userid='$u_id'";
			$go_query=mysqli_query($connection,$query);
			header("location:userlist.php");
	 }
	 function insert_category(){
	global $connection;
	global $msg;
	$cat_name=$_POST['cat_name'];
	if($cat_name==""){
		echo"<script>window.alert('Please Enter Type Name')</script>";
	}elseif($cat_name!="")
	{
		$query="Select * from category where catname='$cat_name'";
		$ch_query=mysqli_query($connection,$query);
		$count=mysqli_num_rows($ch_query);
		if($count>0){
			echo"<script>window.alert('This record is already exists')</script>";
		}
		else{
			$query="insert into category(catname)values('$cat_name')";
			$go_query=mysqli_query($connection,$query);
			if(!$go_query){
				die("QUERY FAILED".mysqli_error($connection));
			}
			else{
				echo"<script>window.alert('Successfully Inserted')</script>";
			}
		}
	}
	
	}
function del_category(){
	global $connection;
	$cat_id=$_GET['c_id'];
	$query="Delete from category where categoryid='$cat_id'";
	$go_query=mysqli_query($connection,$query);
	if($go_query){
	header("location:category.php");
	}else{
		echo "Query Failed".mysqli_error($connection);
	}
	
}

function update_category(){
	global $connection;
	$cat_name=$_POST['cat_name'];
	$cat_id=$_GET['c_id'];
	$query="update category set catname='$cat_name' where categoryid='$cat_id'";
	$go_query=mysqli_query($connection,$query);
	if(!$go_query){
		die("QUERY FAILED".mysqli_error($connection));
	}
	header("location:category.php");
}

/* update */

/* Admin_Login */
		function admin_login(){
			global $connection;
			
			$name=$_POST['adminname'];
			$password=$_POST['password'];
			$hpass=md5($password);
			$query="select * from user";
			$go_query=mysqli_query($connection,$query);
			while
			($out=mysqli_fetch_array($go_query))
			{
				$db_user_name=$out['username'];
				$db_password=$out['password'];
				if
				($db_user_name==$name&&$db_password==$hpass)
				{
					$_SESSION['admin']=$name;
					header('location:dashboard.php');
		}
		else
		{
			echo "<script>window.alert('Invalid Admin name and password')</script>";
			echo  "<script>window.location.href='index.php'</script>";
		}
			}
		}
		
function add_product(){
			global $connection;
			$product_name=$_POST['productname'];
			$cat_id=$_POST['categoryid'];
			$size=$_POST['size'];
			$price=$_POST['price'];
			$qty=$_POST['qty'];
			$photo=$_FILES['photo']['name'];
			if(is_numeric($price)==false)
     {
		 echo "<script>window.alert('enter product Price is numeric value')</script>";
	 }
	 elseif(is_numeric($qty)==false){
		  echo "<script>window.alert('enter product Price is numeric value')</script>";
	 }
	 elseif($size==""){
		  echo "<script>window.alert('Enter Product Size')</script>";
	 }
	 elseif($photo==""){
		  echo "<script>window.alert('Choose product Images')</script>";
	 }
	 
	 elseif($product_name!=""&&$photo!=""){
		 $query="select * from product where productname='$product_name'";
		 $ch_query=mysqli_query($connection,$query);
		 $count=mysqli_num_rows($ch_query);
		 if($count>0){
			 echo "<script>window.alert('This Product is already exists')</script>"; 
		 }
		 
		 else{ $query="insert into product(productname,categoryid,size,price,qty,photo)";
		       $query.="values('$product_name','$cat_id','$size','$price','$qty','$photo')";
			   $go_query=mysqli_query($connection,$query);
			   if(!$go_query){
				die("QUERY FAILED".mysqli_error($connection));   
			   }
			   else{
				   echo "<script language=\"javascript\">window.alert('successfully inserted')</script>";
				   move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
					echo  "<script>window.location.href='prolist.php'</script>";   
			   }
			 
		 }
		 
	 }
			
		}
/* Admin_Login */
function del_product(){
	 global $connection;
	 $p_id=$_GET['p_id'];
	 $query="delete from product where productid='$p_id'";
	 $go_query=mysqli_query($connection,$query);
	 echo "<script>window.location.href='prolist.php'</script>";    
}
 
  function update_product(){
	  global $connection;
	  $product_id=$_GET['p_id'];
	  $product_name=$_POST['product_name'];
	  $cat_id=$_POST['category_id'];
	  $size=$_POST['size'];
	  $price=$_POST['price'];
	  $qty=$_POST['qty'];
	  $photo=$_FILES['photo']['name'];
	  if(!$photo){
		  $query="update product set productname='$product_name',categoryid='$cat_id',";
		  $query.="size='$size',price='$price',qty='$qty' where productid='$product_id'";
	  }
	  else{
		  $query="update product set productname='$product_name',categoryid='$cat_id',size='$size',price='$price',qty='$qty',photo='$photo' where productid='$product_id'";
	  }
	  $go_query=mysqli_query($connection,$query);
	  if(!$go_query){
		   die("QUEYR FAILED".mysqli_error($connection));
	  }
	  else{
		   move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
	  }
	   echo "<script>window.location.href='prolist.php'</script>";
  }
	 
function show_result(){
	    global $connection;
	  $data=$_POST['search'];
	     $query="select * from product where productname LIKE '%$data%'";
		 $go_query=mysqli_query($connection,$query);
		 $count_result=mysqli_num_rows($go_query);
		 if($count_result==0){
			  echo '<div class="well well-lg">Sorry,no results found!<a href="index.php">Back</a></div>';
		 }elseif($count_result>0){
			   while($out=mysqli_fetch_array($go_query)){
				    $product_id=$out['productid'];
					$product_name=$out['productname'];
					$category_id=$out['categoryid'];
					$price=$out['price'];
				   $size=$out['size'];
					$qty=$out['qty'];
					$photo=$out['photo'];
					$display='<div class="col-sm-3 col-md-3"><div class="thumbnail">';
					$display.="<img src='images/{$photo}'>";
					$display.='<div class="caption">';
					$display."<h3>{$product_name}</h3>";
					$display.="<p>Price-{$price}KS</p>";
				   $display.="<p>Size-{$size}</p>";
					$display.='<p class="text-center"><a href="addtocard.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
					$display.="</div></div></div>";
					echo $display;
			   }
		 }
   }
      function create_accu(){
		 global $connection;
	  	$user_name=$_POST['username'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirmpassword'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
		$address=$_POST['address'];
				 
				 $hpass=md5($password);
				 $query="select * from user where username='$user_name' and password='$hpass'";
				 $user_query=mysqli_query($connection,$query);
				 $count=mysqli_num_rows($user_query);
				 if($count>0){
					 echo "<script>window.alert('already exists')</script>";
				 }
				 else{
					 $query="insert into user (username,password,email,phone,address,role)";
					  $query.="values ('$user_name','$hpass','$email','$phone','$address','user')";
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
	function addfeedback()			  
	{
		
		global $connection;
		$email=$_POST['email'];
		$comment=$_POST['comment'];
		if ($email!="" && $comment!="")
				{
		$query="insert into feedback(email,comment,fbdate)";
		$query.="values('$email','$comment',now())";
		$go_query=mysqli_query($connection,$query);
					echo "<script>window.alert('Comment Successfully!')</script>";
		}
		header('location:index.php');
	}

		
	?> 
    
	 
     