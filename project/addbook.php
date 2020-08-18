<?php
require "adminheader.php";
?>

<main><center>
  <h1>Add Book</h1></br>
  <form action="addbook_db.php" method="post">
    <input type="text" name="bookID" placeholder="book id">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="author" placeholder="author">
    <input type="text" name="genre" placeholder="genre">
    <input type="text" name="yearPublished" placeholder="year published">
    <button type="submit" name="submit">Submit</button>
  </form>
</center>
</main>









<?php
require "footer.php";
?>