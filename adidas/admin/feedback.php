<?php
session_start();
global $connection;
include('conn.php');
include('function.php');
?>

<?php include('header.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Order
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Feedback</li>
      </ol>
    </section>
    
    
    
    <!-- Main content -->
    <section class="content container-fluid">
    <section class="content">
    <div class="row">
        <div class="col-xs-12">

		<div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Comment</th>
                  <th>Date</th>
                  <th>Action</th>
                  </tr>
                </thead>
                
                
                
                   <?php
					   
                       $query="Select * from feedback order by fbid desc"; 
					   $go_query=mysqli_query($connection,$query);
					   		while($row=mysqli_fetch_array($go_query))
							{
								$id=$row['fbid'];
								$email=$row['email'];
								$comment=$row['comment'];
								$date=$row['fbdate'];
								echo"<tr>";
								echo"<td>{$id}</td>";
								echo"<td>{$email}</td>";
								echo"<td>{$comment}</td>";
								echo"<td>{$date}</td>";
								echo"<td><a href='userlist.php?action=delete&id={$id}' class='glyphicon glyphicon-trash' 
								onclick=\"return confirm('Are You Sure?')\"></a></td>";
								echo"</tr>";
							}
								
					   ?>
  
  
  
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
		</section>
    </section>
    <!-- /.content -->
  </div>
<?php include('footer.php');?>
 