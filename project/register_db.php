<?php

if(isset($_POST['registersubmit'])){
  require 'database.php';

  $formid = $_POST['userID'];
  $formpassword = $_POST['password'];
  $formtype = $_POST['usertype'];

  $sql = "INSERT INTO userinfo (id, password, userType) VALUES (?,?, ?);";
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: register.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "sss", $formid, $formpassword, $formtype);
    mysqli_stmt_execute($stmt);
    header("Location: home.php");
    exit();

  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

?>