<?php
    session_start();
    include 'include/connection.php';
    if(!isset($_SESSION['id'])){
        echo "<script>
        alert('Session Not Authorized.');
        window.location.href= 'login.php';
        </script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Dashboard</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-collapse">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Silicon Institute of Technology's Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

        <!-- small card -->
        <div class="col-lg-3 col-6">
            <?php
              $query = "SELECT * from links WHERE stat='1'";
              $queryresult = mysqli_query($con, $query);
            ?>
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($queryresult); ?></h3>

                <p>Active Posts</p>
              </div>
              <div class="icon">
                <i class="fas fa-image"></i>
              </div>
              <a href="viewposts.php" class="small-box-footer">
                View Them <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>

        <!-- small card -->
        <div class="col-lg-3 col-6">
            <?php
              $query = "SELECT * from links WHERE stat='0'";
              $queryresult = mysqli_query($con, $query);
            ?>
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($queryresult); ?></h3>

                <p>Inactive Posts</p>
              </div>
              <div class="icon">
                <i class="fas fa-image"></i>
              </div>
              <a href="inactiveposts.php" class="small-box-footer">
                View Them <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>
          
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-12">
                <button type="button" class="btn btn-block btn-primary btn-lg" onclick="window.location.href='addpost.php'">Add Post</button>
            </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 - 2021 <a href="https://www.soumit.tech">ItsSoumit</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
