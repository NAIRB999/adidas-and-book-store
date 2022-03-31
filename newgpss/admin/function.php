<?php
function insert_category()
{
	global $connection;
	global $msg;
	$cat_name=$_POST['cat_name'];
	if($cat_name==""){
		echo"<script>window.alert('Please Enter Category Name')</script>";
	}elseif($cat_name!="")
	{
		$query="Select * from category where categoryname='$cat_name'";
		$ch_query=mysqli_query($connection,$query);
		$count=mysqli_num_rows($ch_query);
		if($count>0){
			echo"<script>window.alert('This record is already exists')</script>";
		}
		else{
			$query="insert into category(categoryname)values('$cat_name')";
			$go_query=mysqli_query($connection,$query);
			if(!$go_query){
				die("QUERY FAILED".mysqli.error($connection));
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
	
	echo "<script>location.href = ('category.php')</script>";
}

function update_category(){
	global $connection;
	$cat_name=$_POST['cat_name'];
	$cat_id=$_GET['c_id'];
	$query="update category set categoryname='$cat_name' where categoryid='$cat_id'";
	$go_query=mysqli_query($connection,$query);
	if(!$go_query){
		die("QUERY FAILED".mysqli_error($connection));
	}
	echo "<script>location.href = 'category.php'</script>";
	
}



function add_product()
{
	global $connection;;
	$product_name=$_POST['product_name'];
	$cat_id=$_POST['category_id'];
	$series=$_POST['series'];
	$price=$_POST['price'];
	$qty=$_POST['qty'];
	$info=$_POST['info'];
	$photo=$_FILES['photo']['name'];
	if(is_numeric($price)==false)
	{
		echo"<script>window.alert('Please Enter Product Price is numeric value')</script>";}
		elseif(is_numeric($qty)==false){
			echo"<script>window.alert('Please Enter Product quantity is numeric value')</script>";}
		elseif($product_name!=""&& $photo!=""){
			$query="select * from product where productname='$product_name'";
			$ch_query=mysqli_query($connection,$query);
			$count=mysqli_num_rows($ch_query);
			if($count>0){
				echo"<script>window.alert('This Product is already exists')</script>";}
				else{	$query="insert into product(productname,categoryid,series,price,qty,photo,info)";
				$query.="values('$product_name','$cat_id','$series','$price','$qty','$photo','$info')";
				$go_query=mysqli_query($connection,$query);
				if(!$go_query){
						die("QUERY FAILED".mysqli_error($connection));
				}else{
					move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
					echo "<script>window.alert('Succesfully inserted')</script>";
					echo "<script>location.href='productlist.php'</script>";
					
				}
				}
		}
		
}

function del_product(){
	global $connection;
	$product_id=$_GET['p_id'];
	$query="Delete from product where productid='$product_id'";
	$go_query=mysqli_query($connection,$query);
	echo "<script>location.href='productlist.php'</script>";
	
}

function update_product(){
		global $connection;
		$product_id=$_GET['p_id'];
		$product_name=$_POST['product_name'];
		$cat_id=$_POST['category_id'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$series=$_POST['series'];
		$info=$_POST['info'];
		$photo=$_FILES['photo']['name'];
		
		if(!$photo){
			$query="update product set productname='$product_name',categoryid='$cat_id',";
			$query.="price='$price',qty='$qty',series='$series',info='$info' where productid='$product_id'";
		}else{
			$query="update product set productname='$product_name',categoryid='$cat_id',";
			$query.="price='$price',qty='$qty',photo='$photo',series='$series',info='$info' where productid='$product_id'";
		}
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){
			die("QUERY FAILED".mysqli.error($connection));
		}else{
			move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
			echo "<script>window.alert('Succesfully updated')</script>";
			echo "<script>location.href='productlist.php'</script>";
			
		}
		
}

function addslidephoto()
{
	global $connection;;
	$photo=$_FILES['slidephoto']['name'];
	
		
		if( $photo!="")
		{
			$query="select * from slidephoto where photo='$photo'";
			$ch_query=mysqli_query($connection,$query);
			$count=mysqli_num_rows($ch_query);
			if($count>0)
			{
				echo"<script>window.alert('This photo is already exists')</script>";
			}
				
			else
				{	$query="insert into slidephoto(photo)";
				$query.="values('$photo')";
				$go_query=mysqli_query($connection,$query);
				if(!$go_query)
				{
						die("QUERY FAILED".mysqli_error($connection));
				}
				else
				{
					move_uploaded_file($_FILES['slidephoto']['tmp_name'],'../images/'.$photo);
					echo "<script>window.alert('Succesfully inserted')</script>";
					echo "<script>location.href='slidelist.php'</script>";
					
				}
				}
		}
		
}

function del_slide(){
	global $connection;
	$slide_id=$_GET['s_id'];
	$query="Delete from slidephoto where slideid='$slide_id'";
	$go_query=mysqli_query($connection,$query);
	echo "<script>location.href='slidelist.php'</script>";
	
}

function update_slide(){
		global $connection;
		$slide_id=$_GET['s_id'];
		$photo=$_FILES['photo']['name'];
		$query="update slidephoto set photo='$photo' where slideid='$slide_id'";
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){
			die("QUERY FAILED".mysqli_error($connection));
		}
		
		else{
			move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
			echo "<script>window.alert('Succesfully updated')</script>";
			echo "<script>location.href='slidelist.php'</script>";
			
		}
		
}


function admin_login(){
	global $connection;
	$name=$_POST['adminname'];
	$password=$_POST['password'];
	$hpass=md5($password);
	$query="Select * from admin";
	$go_query=mysqli_query($connection,$query);
	while($out=mysqli_fetch_array($go_query)){
	$db_admin_name=$out['adminname'];
	$db_password=$out['password'];
	$count=0;
	if($db_admin_name==$name && $db_password==$hpass){
		$_SESSION['admin']=$name;
		header("location:dashboard.php");
		$count++;
	}
	
	}
	if($count==0)
	{
		echo"<script>window.alert('Invalid Admin name and Password')</script>";
		echo"<script>window.location.href='index.php'</script>";
	}
}

function add_admin(){
	global $connection;
	$admin_name=$_POST['adminname'];
	$password=$_POST['password'];
	$cpass=$_POST['confirmpassword'];
	if($password!=$cpass)
	{echo "<script>window.alert('Password and ConfirmPassword are must be same')</script>";}
	elseif ($password!="" && $admin_name!="")
	{
		$query="select * from admin where adminname='$admin_name' and password='$password'";
		$ch_query=mysqli_query($connection,$query);
		$count=mysqli_num_rows($ch_query);
		if($count>0){
			echo"<script>window.alert('This Admin is already exists')</script>";
		}
		else{
		$hashvalue=md5($password);
		$query="insert into admin(adminname,password)";
		$query.="values('$admin_name','$hashvalue')";
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){
			die("QUERY FAILED".mysqli_error($connection));
		}
		
	}
}
}
		
function del_admin(){
	global $connection;
	$admin_id=$_GET['id'];
	$query="Delete from admin where adminid='$admin_id'";
	$go_query=mysqli_query($connection,$query);
	//header("location:userlist.php");
	echo "<script>location.href('userlist.php')</script>";
}

function del_user(){
	global $connection;
	$user_id=$_GET['id'];
	$query="Delete from user where userid='$user_id'";
	$go_query=mysqli_query($connection,$query);
	//header("location:userlist.php");
	echo "<script>location.href('userlist.php')</script>";
}


		
?>		