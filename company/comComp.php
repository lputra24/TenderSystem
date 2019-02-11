<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Kevin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li>
        <a href="index.html">
          <span>Dashboard</span>
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
          <li><a href="createProvinsi.php"><i class="fa fa-circle-o"></i>Create State</a></li>
          <li><a href="createKota.php"><i class="fa fa-circle-o"></i> Create Area</a></li>
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
          <li><a href="createCategory.php"><i class="fa fa-circle-o"></i>Create Category</a></li>
          <li><a href="createSub.php"><i class="fa fa-circle-o"></i> Create Sub-Category</a></li>
          <li><a href="createBrand.php"><i class="fa fa-circle-o"></i>Create Brand</a></li>
          <li><a href="viewCategory.php"><i class="fa fa-circle-o"></i>View Category</a></li>
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
          <li><a href="createSupp.php"><i class="fa fa-circle-o"></i>Create Supplier</a></li>
          <li><a href="createBranch.php"><i class="fa fa-circle-o"></i> Create Branch</a></li>
          <li><a href="viewSupp.php"><i class="fa fa-circle-o"></i>View Supplier</a></li>
        </ul>
      </li>


      <li class="active treeview">
        <a href="#">
          <span>Company</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li  class = "active treeview"><a href="createCom.php"><i class="fa fa-circle-o"></i>Create Company</a></li>
          <li><a href="viewCom.php"><i class="fa fa-circle-o"></i>View Company</a></li>
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
          <li><a href="birth.php"><i class="fa fa-circle-o"></i>Birthday</a></li>
          <li><a href="lang.php"><i class="fa fa-circle-o"></i>Language Editor</a></li>
          <li><a href="mess.php"><i class="fa fa-circle-o"></i>Messenger</a></li>
          <li><a href="err.php"><i class="fa fa-circle-o"></i>Error log</a></li>
          <li><a href="req.php"><i class="fa fa-circle-o"></i>Request log</a></li>
          <li><a href="ph.php"><i class="fa fa-circle-o"></i>PHP log</a></li>
          <li><a href="messa.php"><i class="fa fa-circle-o"></i>Message log</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<!-- <div class="control-sidebar-bg"></div> -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
