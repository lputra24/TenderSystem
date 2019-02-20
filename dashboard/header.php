<?php
session_start();
if (empty($_SESSION['login_admin'])) {
  header('location: ../dashboard.php');
} ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MOSPRO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../dashboard.php" class="logo">
      <span class="logo-lg"><b>MOSPRO</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <span >

                <?php
                include '../connection/conn.php';
                $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

                $result = $connect->query($query);

                $row = mysqli_fetch_array($result);
                // echo var_dump($row);

                echo $row[3];
                 ?>

              </span>

            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p><?php
                include '../connection/conn.php';
                $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

                $result = $connect->query($query);

                $row = mysqli_fetch_array($result);
                // echo var_dump($row);

                echo $row[3];
                 ?>
                  <small><?php
                  include '../connection/conn.php';
                  $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

                  $result = $connect->query($query);

                  $row = mysqli_fetch_array($result);
                  // echo var_dump($row);

                  echo $row['Email'];
                   ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profileAdmin/profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard.html"><span>Dashboard</span>
            </span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <span>Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../area/createProvinsi.php"><i class="fa fa-circle-o"></i>Create State</a></li>
            <li><a href="../area/createKota.php"><i class="fa fa-circle-o"></i> Create Area</a></li>
            <li><a href="../area/viewArea.php"><i class="fa fa-circle-o"></i>View State and Area</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../category/createCategory.php"><i class="fa fa-circle-o"></i>Create Category</a></li>
            <li><a href="../category/createSub.php"><i class="fa fa-circle-o"></i> Create Sub-Category</a></li>
            <li><a href="../category/createBrand.php"><i class="fa fa-circle-o"></i>Create Brand</a></li>
            <li><a href="../category/viewCategory.php"><i class="fa fa-circle-o"></i>View Category</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Create Supplier</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Create Branch</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>View Supplier</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <span>Company</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Create Company</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>View Company</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <span>Tender</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <span>Utilities</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Birthday</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Language Editor</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Messenger</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Error log</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Request log</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>PHP log</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Message log</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section> -->


    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                <h3>150</h3>

              <p>Request</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="request.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php
              $connect = mysqli_connect("localhost", "kevin", "abcdef", "mydb");

              $sql = "SELECT * FROM `company`";

              $connStatus = $connect->query($sql);

              $numberOfRows = mysqli_num_rows($connStatus);

              echo $numberOfRows;
              //this echo out the total number of rows returned from the query

              $connect->close();
              ?></h3>

              <p>Company</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-cart"></i>
            </div>
            <a href="viewCompany.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
              $connect = mysqli_connect("localhost", "kevin", "abcdef", "mydb");

              $sql = "SELECT * FROM `supplier`";

              $connStatus = $connect->query($sql);

              $numberOfRows = mysqli_num_rows($connStatus);

              echo $numberOfRows;
              //this echo out the total number of rows returned from the query

              $connect->close();
              ?></h3>

              <p>Supplier</p>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
            <a href="viewSupplier" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                <?php
                $connect = mysqli_connect("localhost", "kevin", "abcdef", "mydb");

                $sql = "SELECT * FROM `administrator`";

                $connStatus = $connect->query($sql);

                $numberOfRows = mysqli_num_rows($connStatus);

                echo $numberOfRows;
                //this echo out the total number of rows returned from the query

                $connect->close();
                ?>
              </h3>

              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="viewAdmin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
