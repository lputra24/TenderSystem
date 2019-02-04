<?php include_once "header.php" ?>



      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><b>REQUEST</b></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Organitation</th>
                <th>Classification</th>
                <th>Created By</th>
                <th>Email</th>
                <th>Phone Work</th>
                <th>Phone Mobile</th>
                <th>Aproval</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Enseval</td>
                <td>Company</td>
                <td>Kevin</td>
                <td>kevin@gmail.com</td>
                <td>087899556000</td>
                <td>087899556000</td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Edit
                    <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> -->
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Accept</a></li>
                      <li><a href="#">Decline</a></li>
                    </ul>
                  </div>
                </td>
              </tr>

            </tbody>

            <tfoot>
            <tr>
              <th>Organitation</th>
              <th>Classification</th>
              <th>Created By</th>
              <th>Email</th>
              <th>Phone Work</th>
              <th>Phone Mobile</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>




<?php include "footer.php" ?>
