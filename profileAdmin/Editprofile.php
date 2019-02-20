<?php include '../connection/query_update.php'; ?>
<?php include 'headerAdd.php' ?>
<style>.error {color: #FF0000;}</style>

<div class="content-wrapper">
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Edit Profile</b></h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>

      </div>

      <?php
      include '../connection/conn.php';
      $query = "SELECT *FROM administrator WHERE Email = '$_SESSION[login_admin]'";
      $result = $connect->query($query);
      $row = mysqli_fetch_array($result);
      // echo var_dump($row);
      echo '
      <div class="card-body">
      <h2 class="card-title">'.$row['Email'].'</h2>
      ';

      ?>

    </div>
    <form accept-charset="UTF-12" enctype="multipart/form-data" role="form" method="POST">
      <fieldset>
        <div class="box-body">

          <div class="form-group">
            <label><b>Name</b></label>
            <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" value="<?php echo $Name;?>" required>
          </div><span class="error"><?php echo $NameErr; ?></span>

          <div class="form-group">
            <label><b>Password</b></label>
            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" value="<?php echo $Password;?>" required>
          </div>

          <div class="form-group">
            <label><b>Confirm Password</b></label>
            <input type="password" class="form-control" id="passKonfrim" name="passKonfrim" placeholder="Re Type Your Password" value="<?php echo $Password;?>" required>
          </div>

          <div class="form-group">
            <label><b>Phone Mobile</b></label>
            <input type="text" class="form-control" id= "PhoneMobile" name="PhoneMobile" placeholder="PhoneMobile" value="<?php echo $PhoneMobile;?>" required>
          </div><span class="error"><?php echo $PhoneMobileErr; ?></span>

          <input class="btn btn-lg btn-outline-primary" name="insert" id="insert" type="submit" value="Submit">
          <a href="../dashboard.php" class="btn btn btn-outline-primary" type="submit">Cancel</a>
          <!-- <button type="button" class="btn btn-block btn-danger" href="../dashboard.php">Cancel</button> -->
        </div>
      </fieldset>
    </form>
  </div>

</section>
</div>
<?php include "footer.php" ?>
