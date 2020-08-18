<?php

if(isset($_POST['submit'])){
  require 'database.php';

  $varBookID = $_POST['bookID'];


  $query = "DELETE FROM `unavailableBooks` WHERE `bookID` = $varBookID";
    
    $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($conn);
}

?>