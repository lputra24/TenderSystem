<?php include_once "headerKota.php" ?>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "mydb";
$connect = mysqli_connect($hostname,$username,$password,$databaseName);
$query = "SELECT * FROM `provinsi`";
$result = mysqli_query($connect,$query);
?>
<div class="content-wrapper">
  <section class="content">

    <form method="post" action="tambahKota.php">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Create City</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="form-group">
          <input type="text" class="form-control" id="NamaKota" name="NamaKota" placeholder="Insert City">
        </div>
        <div class="form-group">
          <label for="provinsi">provinsi</label>
          <select name="provinsi" id="provinsi" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php
            $sql_provinsi = mysqli_query($connect, "SELECT * FROM provinsi") or die(mysqli_error($connect));
            while($data_provinsi = mysqli_fetch_array($sql_provinsi)){
              echo '<option value="'.$data_provinsi['IdProvinsi'].'">'.$data_provinsi['NamaProvinsi'].'</option>';
            } ?>
          </select>
        </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </section>
</div>
<?php include "footer.php" ?>
