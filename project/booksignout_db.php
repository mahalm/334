<?php

if(isset($_POST['submit'])){
  require 'database.php';

  $varBookID = $_POST['bookID'];
  $varID = $_POST['ID'];


  $sql = "INSERT INTO unavailableBooks (bookID, userID) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../home.php?error=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "ss", $varBookID, $varID);
    mysqli_stmt_execute($stmt);
    echo 'Book Successfully signed out';
    
    
    //header("Location: home.php");
    //exit();

  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

?>