<?php
$message="";
if(count($_POST)>0) {
  $conn = mysqli_connect("localhost","root","","demo");
  $result = mysqli_query($conn,"SELECT * FROM userinfodata WHERE username='" . $_POST["username"] . "' and password1 = '". $_POST["password1"]."'");
  $count  = mysqli_num_rows($result);
  if($count==0) 
  {
    $message = "Invalid Username or Password!";
     $msg = "Invalid Username or Password!";
    header('location:Login.php?msg='.$msg);
  } else {
      $error = "erro";
    header('location:dashboard.php?msg='.$error);
  }
}

?>