<?php
session_start();
include_once 'query.php';
$query = new Query();
$login = $query->tambahProvinsi(NULL,$_POST['NamaProvinsi']);
if ($login!="0") {
  $_SESSION['NamaProvinsi'] = $login['NamaProvinsi'];
  header ('location: createProvinsi.php');
}
?>
