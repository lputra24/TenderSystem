<?php
include 'conn.php';
$Name_Valid = $PhoneMobile_Valid = true;
$NameErr = $PhoneMobileErr = $login_admin = "";
$Name = $Password = $PhoneMobile  = $pass_komfrim  = "";
if(isset($_POST["insert"]))
{
  $Name = trim($_POST['Name']);
  $Password = trim(md5($_POST['Password']));
  $pass_komfrim = trim(md5($_POST['passKonfrim']));
  $PhoneMobile =trim($_POST['PhoneMobile']);
  $login_admin = $_SESSION['login_admin'];

  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["Name"])) {
      $Name_Valid = false;
      $NameErr = "Invalid name Format!";
      }
  if (!preg_match("/^[0-9]*$/",$_POST["PhoneMobile"])) {
      $PhoneMobile_Valid = false;
      $PhoneMobileErr = "Invalid Phone Number format";
      }

  if($Name_Valid == true and $PhoneMobile_Valid == true){
    $query = "UPDATE administrator SET Password='$Password', Name='$Name', PhoneMobile='$PhoneMobile' WHERE Email='$login_admin'";
    $res = mysqli_query($connect, $query);
      if($Password != $pass_komfrim){
        echo "<script>alert('pass tidak sama')</script>";
      }else{
        if (mysqli_query($connect, $query)) {
          echo "<script>alert('PROFILE UPDATED');document.location='../dashboard.php'</script>";
        }else {
          echo '<script>alert("ERROR")</script>';
        }
      }
    }
  }


?>
