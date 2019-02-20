
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tri Sapta Jaya</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Register</b>Company</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new Company</p>

    <form action="index.php" method="post">

      <p class="login-box-msg">--Account--</p>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="UserName " required>
        <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Confirm Password"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Phone Number"required>
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
      </div>
        <p class="login-box-msg">--Supplier--</p>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Supplier Name"required>
        <!-- <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Address"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group">
        <select class="form-control select2"
                style="width: 100%;">
          <option>--Kota/Kabupaten--</option>
          <option>Alaska</option>
          <option>California</option>
          <option>Delaware</option>
          <option>Tennessee</option>
          <option>Texas</option>
          <option>Washington</option>
        </select>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Phone Work"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>
      <p class="login-box-msg">--Pajak--</p>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama Pajak"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="NPWP"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="No SIKA"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="No SIUP"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control"  id = "datepicker" placeholder="Masa Berlaku SIUP">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <p class="login-box-msg">--PBF&APJ--</p>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama PBF"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="No Ijin PBF"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control"  id = "datepicker" placeholder="Masa Berlaku SIUP">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama APJ"required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control"  id = "datepicker" placeholder="Masa Berlaku APJ">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="login.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

</script>
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function () {
    $('.select2').select2()
    $('#datepicker').datepicker({
      autoclose: true
    })
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  })
</script>

</body>
</html>
