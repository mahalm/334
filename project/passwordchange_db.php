<?php

if(isset($_POST['submit'])){
  require 'database.php';

  $varID = $_POST['id'];
  $varPassword = $_POST['password'];


  $query = "UPDATE userinfo SET password='$varPassword' WHERE id='$varID'";
  $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo 'Password change successful';
    }else{
        echo 'Password change Failed';
    }
    mysqli_close($conn);
}

?>