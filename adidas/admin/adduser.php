<?php
session_start();
global $connection;
include('conn.php');
include('function.php');
?>
<!DOCTYPE html>
<?php 
include('header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       User
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Add User</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">

	
         <div class="row">
        <!-- left column -->
        <div class="col-mdoffset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ADD New User</h3>
            </div>
            <?php
if(isset($_POST['add_user']))
{ add_user(); }

?>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>User Name</label>
                  <input type="text" class="form-control" name="username" placeholder="Enter Username" required="required">
                </div>
                <div class="form-group">
                  <label >Password</label>
                  <input type="password" class="form-control " name="password" placeholder="Enter Password" required="required">
                </div>
               
                <div class="form-group">
                  <label >Comfirm Password</label>
                  <input type="password" class="form-control" name="comfirmpassword" placeholder="Enter Password" required="required">
                </div>
              
              <div class="form-group">
                <label>User Type</label>
                <select name="usertype" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Admin</option>
                  <option>User</option>
                 
                </select>
              </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="add_user" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
<?php
		include('footer.php');
		?>
</body>
</html>