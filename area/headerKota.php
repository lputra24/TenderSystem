
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tri Sapta Jaya</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">

  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">

  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">





</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TSJ</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Tri Sapta Jaya</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">Kevin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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


        <li>
          <a href="../dashboard.php"><span>Dashboard</span>
            </span>
          </a>
        </li>


        <li class="active treeview">
          <a href="#">
            <span>Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="createProvinsi.php"><i class="fa fa-circle-o"></i>Create State</a></li>
            <li class="active"><a href="createKota.php"><i class="fa fa-circle-o"></i> Create Area</a></li>
            <li><a href="viewArea.php"><i class="fa fa-circle-o"></i>View State and Area</a></li>
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
            <li><a href="createCategory.html"><i class="fa fa-circle-o"></i>Create Category</a></li>
            <li><a href="createSub.html"><i class="fa fa-circle-o"></i> Create Sub-Category</a></li>
            <li><a href="createBrand.html"><i class="fa fa-circle-o"></i>Create Brand</a></li>
            <li><a href="viewCategory.html"><i class="fa fa-circle-o"></i>View Category</a></li>
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

  <!-- <div class="content-wrapper">
    <section class="content">
      <div class="row">
      </div>
  </section>
</div> -->
