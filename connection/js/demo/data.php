<?php
$connection = mysqli_connect('localhost','root','','mydb');
$result = mysqli_query($connection,'select*from administrator');
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
echo json_encode($data);
 ?>
