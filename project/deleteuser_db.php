<?php

if(isset($_POST['submit'])){
  require 'database.php';

  $varUserID = $_POST['id'];


  $query = "DELETE FROM `userinfo` WHERE `id` = $varUserID";
    
    $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo 'User Deleted';
    }else{
        echo 'User Not Deleted';
    }
    mysqli_close($conn);
}

?>