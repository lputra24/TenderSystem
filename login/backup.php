<?php

$EmailErr = $NameErr = $PhoneMobileErr = "";
$Email = $Name = $Password = $PhoneMobile = $Status = $pass_komfrim = $Level = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$_POST["Email"])) {
    $EmailErr = "Email is Required!";
    }else{
      if (!preg_match("/^[a-zA-Z ]*$/",$_POST["Name"])) {
        $NameErr = "Invalid name Format!";
      }else{
        if (!preg_match("/^[0-9]*$/",$_POST["PhoneMobile"])) {
        $PhoneMobileErr = "Invalid Phone Number format";
        }else{
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
              $queryz = "INSERT INTO administrator VALUES(NULL,'$Email','$Password','$Name','$PhoneMobile','$Status','$Level')";
              $resz = mysqli_query($connect, $queryz);
              echo "<script>alert('Admin added');document.location='../dashboard/viewAdmin.php'</script>";
          }
        }
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














 <li class="dropdown user user-menu">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
     <?php echo $_SESSION['Name'] ?>
   </a>
   <ul class="dropdown-menu">
     <!-- User image -->
     <li class="user-header">
     </li>
     <!-- Menu Footer-->
     <li class="user-footer">
       <div class="pull-left">
         <a href="#" class="btn btn-default btn-flat">Profile</a>
       </div>
       <div class="pull-right">
         <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
       </div>
     </li>
   </ul>
 </li>
