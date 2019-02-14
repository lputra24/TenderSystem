<?php include_once "headerSub.php" ?>

<div class="content-wrapper">
  <section class="content">

    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Create Sub Category</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group">
          <label>Select Category</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">--PLEASE SELECT CATEGORY--</option>
            <option>Susu</option>
            <option>Obat</option>
            <option>Snack</option>
            <option>Makanan</option>
          </select>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group">
          <label>Create Sub Category</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insert Category">
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </section>
</div>

<?php include "footer.php" ?>
