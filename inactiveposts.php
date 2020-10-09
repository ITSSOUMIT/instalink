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

  <title>Inactive Posts</title>
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

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">In-Active Posts</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image Link</th>
                      <th>Image Text</th>
                      <th>Link Type</th>
                      <th>Link</th>
                      <th>Link Text</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $query = "SELECT * from links WHERE stat='0' ORDER BY id DESC";
                        $queryresult = mysqli_query($con, $query);
                        $c = 1;
                        while($row = mysqli_fetch_array($queryresult)){
                    ?>
                    <tr>
                      <td><?php echo $c; ?></td>
                      <td><a href="<?php echo $row['imagelink'] ?>" target="_blank"><?php echo $row['imagelink'] ?></a></td>
                      <td><?php echo $row['alttext'] ?></td>
                      <td>
                            <?php
                                if($row['linktype']==0){
                                    echo "Registration Link";
                                }
                                if($row['linktype']==1){
                                    echo "Website Link";
                                }
                                if($row['linktype']==2){
                                    echo "Email Address";
                                }
                            ?>
                      </td>
                      <td>
                            <?php
                                if(($row['linktype']==0) || ($row['linktype']==1)){
                                    ?><a href="https://www.<?php echo $row['link']; ?>" target="_blank"><?php echo $row['link']; ?></a><?php
                                }
                                if($row['linktype']==2){
                                    ?><a href="mailto:<?php echo $row['link']; ?>" target="_blank"><?php echo $row['link']; ?></a><?php
                                }
                            ?>
                     </td>     
                      <td><?php echo $row['linktext'] ?></td>
                      <td><button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location.href='markactive.php?id=<?php echo $row['id']; ?>'">Mark as Active</button></td>
                    </tr>
                    <?php
                    $c ++;
                    } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
          
        </div>
        <!-- /.row -->
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