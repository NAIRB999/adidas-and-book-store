<?php
session_start();
global $connection;
include('conn.php');
include('function.php');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
include('header.php');
?>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Dashboard
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Dashborad</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">

	 <div class="row">
       
       <div class="col-md-3">
        <div class="panel panel-primary">
                <div class="panel-heading">
                <h3><span class="glyphicon glyphicon-list"></span>Products</h3>
                </div>
                            <div class="panel-body text-center">
            <a href="prolist.php" class="btn btn-primary">View Detail
                <span class="badge">
                <?php
                $total="Select productid from product";
                $get_total=mysqli_query($connection,$total);
                $num=mysqli_num_rows($get_total);
                echo $num;
                ?>
                </span></a>
            </div>
        </div>
	</div>
        
    <div class="col-md-3">
        <div class="panel panel-success">
                <div class="panel-heading">
                <h3><span class="glyphicon glyphicon-list-alt"></span>Categories</h3>
                </div>
            <div class="panel-body text-center">
            <a href="category.php" class="btn btn-success">View Detail
                <span class="badge">
                <?php
                $total="Select categoryid from category";
                $get_total=mysqli_query($connection,$total);
                $num=mysqli_num_rows($get_total);
                echo $num;
                ?>
                </span></a>
            </div>
        </div>
	</div>
    
    <div class="col-md-3">
        <div class="panel panel-danger">
                <div class="panel-heading">
                <h3><span class="glyphicon glyphicon-envelope"></span>Order</h3>
                </div>
            <div class="panel-body text-center">
            <a href="order.php" class="btn btn-danger">View Detail
                <span class="badge">
                <?php
                $total="Select orderid from ad_order";
                $get_total=mysqli_query($connection,$total);
                $num=mysqli_num_rows($get_total);
                echo $num;
                ?>
                </span></a>
            </div>
        </div>
	</div>
    
    <div class="col-md-3">
        <div class="panel panel-info">
                <div class="panel-heading">
                <h3><span class="glyphicon glyphicon-user"></span>User</h3>
                </div>
            <div class="panel-body text-center">
            <a href="userlist.php" class="btn btn-info">View Detail
                <span class="badge">
                <?php
                $total="Select userid from user";
                $get_total=mysqli_query($connection,$total);
                $num=mysqli_num_rows($get_total);
                echo $num;
                ?>
                </span></a>
            </div>
        </div>
	</div>
       
        <!-- ./col -->
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