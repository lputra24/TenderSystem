<?php include_once "header.php" ?>


      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Mobile</th>
              <th>Level</th>
              <th>Status</th>
            </tr>
            </thead>

            <tbody>
              <?php
              include 'conn.php';
              $query = "
              SELECT *
              FROM administrator
              WHERE level in('Super','Admin');
              ";
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result))
              {
                echo '
                <tr>
                <td>'.$row['Name'].'</td>
                <td>'.$row['Email'].'</td>
                <td>'.$row['PhoneMobile'].'</td>
                <td>'.$row['Level'].'</td>
                <td>'.$row['Status'].'</td>
                </tr>
                ';
              }
              ?>
            </tbody>

            <tfoot>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Mobile</th>
                <th>Level</th>
                <th>Status</th>
              </tr>
            </tfoot>
          </table>
          <form action="addAdmin.php">
            <input type="submit" class="btn btn-primary" value="Add Admin" />
          </form>
        </div>
        <!-- /.box-body -->
      </div>




<?php include "footer.php" ?>
