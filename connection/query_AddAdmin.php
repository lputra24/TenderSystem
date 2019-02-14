<?php
$Email_Valid = $Name_Valid = $PhoneMobile_Valid = true;
$EmailErr = $NameErr = $PhoneMobileErr = "";
$Email = $Name = $Password = $PhoneMobile = $Status = $pass_komfrim = $Level = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$_POST["Email"])) {
    $Email_Valid = false;
    $EmailErr = "Invalid Email Format!";
    }
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["Name"])) {
      $Name_Valid = false;
      $NameErr = "Invalid name Format!";
      }
  if (!preg_match("/^[0-9]*$/",$_POST["PhoneMobile"])) {
      $PhoneMobile_Valid = false;
      $PhoneMobileErr = "Invalid Phone Number format";
      }
      

  if($Email_Valid == true and $Name_Valid == true and $PhoneMobile_Valid == true){
  $Name = test_input($_POST["Name"]);
  include 'conn.php';
  if(isset($_POST["insert"]))
  {
    $Email = trim($_POST['Email']);
    $Password = trim(md5($_POST['Password']));
    $pass_komfrim = trim(md5($_POST['passKonfrim']));
    $PhoneMobile =trim($_POST['PhoneMobile']);
    $Status = trim($_POST['Status']);
    foreach ($_POST['Level'] as $select)
    {
      $Level = $select;
    }
    $query = "SELECT*FROM administrator where Email='$Email'";
    $res = mysqli_query($connect, $query);
    if (mysqli_num_rows($res)==1) {
      echo "<script>alert('Email is used')</script>";
    }else{
      if($Password != $pass_komfrim){
        echo "<script>alert('pass tidak sama')</script>";
      }else{
      // $queryz = "INSERT INTO administrator VALUES(NULL,'$Email','$Password','$Name','$PhoneMobile','$Status','$Level')";
      // $resz = mysqli_query($connect, $queryz);
      echo "<script>alert('Admin added');document.location='../dashboard/viewAdmin.php'</script>";
      }
    }
    }
  }
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}



 ?>
