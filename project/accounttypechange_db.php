<?php

if(isset($_POST['submit'])){
  require 'database.php';

  $varID = $_POST['id'];
  $varType = $_POST['userType'];


  $query = "UPDATE userinfo SET userType='$varType' WHERE id='$varID'";
  $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo 'ID change successful';
    }else{
        echo 'ID change Failed';
    }
    mysqli_close($conn);
}

?>