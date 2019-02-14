<?php
session_start();
include_once 'query.php';
$error='';
$Password=$_POST['Password'];
$Password = md5($Password);
$query2 = new Query();
$login = $query2->ceklogin($_POST['Email'],$Password);
if ($login!="0") {
			if (empty($_POST['Email']) || empty($_POST['Password']))
			{
          echo "<script>alert('Email or Password is invalid');document.location='../index.php'</script>";
			}
			else if($login['Level']=="Super")
			{
				$_SESSION['login_admin']=$login['Email']; 		// Membuat Sesi/session
				header("location: ../dashboard.php"); 		// Mengarahkan ke halaman profil
			}
			else if($login['Level']=="Admin")
			{
				$_SESSION['login_admin']=$login['Email']; 		// Membuat Sesi/session
				header("location: ../dashboard.php"); 			// Mengarahkan ke halaman profil
			}
}else {
	echo "<script>alert('Email or Password is invalid');document.location='../index.php'</script>";
}

?>
