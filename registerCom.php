
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

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Company Name ">
        <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First Name">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last Name">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password">
        <!-- <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Phone Work">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Phone Fax">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Phone Mobile">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control"  id = "datepicker" placeholder="mm-dd-yy">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>


        <div class="form-group">
          <select class="form-control select2"
                  style="width: 100%;">
            <option>--Select Provinsi--</option>
            <option>Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
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

        <div class="form-group">
          <select class="form-control select2"
                  style="width: 100%;">
            <option>--Kecamatan--</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
        </div>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Kode Pos">
          <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        </div>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Jalan">
          <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        </div>


      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="https://www.facebook.com/" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="https://accounts.google.com/signin/v2/identifier?hl=id&passive=true&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dgmail%26oq%3Dgmail%26aqs%3Dchrome..69i57j69i60.2374j0j4%26sourceid%3Dchrome%26ie%3DUTF-8&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

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
