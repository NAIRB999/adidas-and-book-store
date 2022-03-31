<?php
session_start();
global $connection;
include('conn.php');
include('function.php');

 if(isset($_GET['action'])&& $_GET['action']=='delete')
					   {
						   del_user();
					   }
?>
<?php
include('header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       User List
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">User</li>
        <li class="active">User List</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">

	
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                           <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>User Role</th>
                  <th>Action</th>
                </tr>
                
                   <?php
					   
                       $query="Select * from user order by userid desc"; 
					   $go_query=mysqli_query($connection,$query);
					   		while($row=mysqli_fetch_array($go_query))
							{
								$user_id=$row['userid'];
								$user_name=$row['username'];
								$user_role=$row['role'];
								
								echo"<tr>";
								echo"<td>{$user_id}</td>";
								echo"<td>{$user_name}</td>";
								echo"<td>{$user_role}</td>";
								
								echo"<td><a href='userlist.php?action=delete&id={$user_id}' class='glyphicon glyphicon-trash' 
								onclick=\"return confirm('Are You Sure?')\"></a></td>";
								
								echo"</tr>";
							}
								
					   ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 <?php
		include('footer.php');
		?>