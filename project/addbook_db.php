<?php

if(isset($_POST['submit'])){
  require 'database.php';

  $varBookID = $_POST['bookID'];
  $varTitle = $_POST['title'];
  $varAuthor = $_POST['author'];
  $varGenre = $_POST['genre'];
  $varYearPublished = $_POST['yearPublished'];

  $sql = "INSERT INTO Books (bookID, title, author, genre, yearPublished) VALUES (?,?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: adminhome.php");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "sssss", $varBookID, $varTitle, $varAuthor, $varGenre, $varYearPublished);
    mysqli_stmt_execute($stmt);
    header("Location: adminhome.php");
    exit();

  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

?>