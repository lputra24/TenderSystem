<?php include '../connection/query_AddAdmin.php'; ?>
<?php include 'headerAdd.php' ?>
<style>.error {color: #FF0000;}</style>
<div class="content-wrapper">
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Create Admin</b></h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <form accept-charset="UTF-12" enctype="multipart/form-data" role="form" method="POST">
      <fieldset>
        <div class="box-body">
          <div class="form-group">
            <label><b>Email</b></label>
            <input type="text" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $Email;?>" required>
          </div><span class="error"><?php echo $EmailErr; ?></span>

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

          <div class="form-group">
            <label><b>Status</b></label>
            <input type="text" class="form-control" id="Status"name="Status" placeholder="Enable / Disabled" value="<?php echo $Status;?>" required>
          </div>

          <div class="form-group">
            <label>Permission</label>
            <select class="form-control select2" name="Level[]">
              <option value="Super">Super</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
          <input class="btn btn-lg btn-outline-primary" name="insert" id="insert" type="submit" value="Submit">
        </div>
      </fieldset>
    </form>
  </div>

</section>
</div>
<?php include "footer.php" ?>
