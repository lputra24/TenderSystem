<?php include_once "headerProv.php" ?>

<div class="content-wrapper">
  <section class="content">

  <form  method="post" action="tambahProvinsi.php">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Create State</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group">
          <input type="text" class="form-control" id="NamaProvinsi" name="NamaProvinsi" placeholder="Insert Category">
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </section>
</div>











  </section>
</div>
<?php include "footer.php" ?>
