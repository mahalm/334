<?php
require "header.php";
?>

<main><center>
  <h1>Book Signout</h1></br>
  <form action="booksignout_db.php" method="post">
    <input type="text" name="bookID" placeholder="bookID">
     <input type="text" name="ID" placeholder="Account ID">
    <button type="submit" name="submit">Submit</button>
  </form>
</center>
</main>









<?php
require "footer.php";
?>