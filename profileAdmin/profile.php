<?php include 'headerAdd.php' ?>
<?php include '../connection/query_update.php'; ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Profile
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">

            <h3 class="profile-username text-center"><b><?php
            include '../connection/conn.php';
            $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

            $result = $connect->query($query);

            $row = mysqli_fetch_array($result);

            echo strtoupper($row[3]);
             ?></b></h3>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Status</b> <a class="pull-right">

                <?php
                include '../connection/conn.php';
                $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

                $result = $connect->query($query);

                $row = mysqli_fetch_array($result);

                echo ucwords($row['Status']);
                 ?>
               </a>
              </li>
              <li class="list-group-item">
                <b>Level</b> <a class="pull-right">
                <?php
                include '../connection/conn.php';
                $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

                $result = $connect->query($query);

                $row = mysqli_fetch_array($result);

                echo ucwords($row['Level']);
                 ?></a>
              </li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">About Me</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <strong></i>Name</strong>

            <p class="text-muted">
              <?php
              include '../connection/conn.php';
              $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

              $result = $connect->query($query);

              $row = mysqli_fetch_array($result);

              echo ucwords($row['Name']);
               ?>
            </p>

            <hr>

            <strong></i>Email</strong>

            <p class="text-muted">
              <?php
              include '../connection/conn.php';
              $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

              $result = $connect->query($query);

              $row = mysqli_fetch_array($result);

              echo $row['Email'];
               ?>
            </p>

            <hr>

            <strong></i>Phone Number</strong>

            <p class="text-muted"><?php
            include '../connection/conn.php';
            $query = "SELECT*FROM administrator WHERE Email='$_SESSION[login_admin]'";

            $result = $connect->query($query);

            $row = mysqli_fetch_array($result);

            echo $row['PhoneMobile'];
             ?></p>


          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Edit Profile</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="settings">
                <form class="form-horizontal" accept-charset="UTF-12" enctype="multipart/form-data" role="form" method="POST">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" value="<?php echo $Name;?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" value="<?php echo $Password;?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="passKonfrim" name="passKonfrim" placeholder="Re Type Your Password" value="<?php echo $Password;?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Phone Mobile</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id= "PhoneMobile" name="PhoneMobile" placeholder="PhoneMobile" value="<?php echo $PhoneMobile;?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" required> Confirm To Edit</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-danger" name="insert" id="insert" value = "Submit" >

                      <a href="../dashboard.php" class="btn btn btn-outline-primary" type="submit">Cancel</a>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>


<?php include "footer.php" ?>
