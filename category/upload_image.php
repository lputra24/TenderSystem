<?php
session_start();
include_once 'query.php';
$query = new Query();
$login = $query->tambahKategori(NULL,$_POST['NamaKategori'],$_POST['ImgURL']);
if ($login!="0") {
  $_SESSION['NamaKategori'] = $login['NamaKategori'];
  $_SESSION['ImgURL'] = $login['ImgURL'];
  header ('location: createCategory.php');
}
?>
