<?php
session_start();
include_once 'query.php';
$query = new Query();
$login = $query->tambahKota(NULL,$_POST['NamaKota'],$_POST['provinsi']);
if ($login!="0") {
  $_SESSION['NamaKota'] = $login['NamaKota'];
  $_SESSION['provinsi'] = $login['provinsi'];

  header ('location: createKota.php');
}
?>
