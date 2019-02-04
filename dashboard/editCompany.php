<?php include_once "header.php" ?>

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Edit</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">
      <div class="form-group">
        <label for="Name" class="col-sm-2 control-label">Name Organitation</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="organitation">
        </div>
      </div>
    </div>

      <div class="box-body">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">Classification</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" id="classification" disabled>
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">First Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" >
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">Last Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" >
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" >
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">Phone Mobile</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="mobile" >
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">Phone Work</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="work" >
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">Phone Fax</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="fax" >
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="form-group">
          <label for="Name" class="col-sm-2 control-label">Date Of Birth</label>
          <div class="col-sm-10">
            <input type="text" class="form-control pull-right" id="datepicker">
          </div>
        </div>
      </div>

      <div class="box-body">
        <div class="form-group">
          <a class="btn btn-app" style="float: right; right: 30px;" >
            <i class="fa fa-save"></i> Save
          </a>
        </div>
      </div>
    <!-- /.box-footer -->
  </form>
</div>

<?php include "footer.php" ?>
