<?php
require "header.php";
?>

<main><center>
  <h1>Book Return</h1></br>
  <form action="bookreturn_db.php" method="post">
    <input type="text" name="bookID" placeholder="book id">
    <button type="submit" name="submit">Submit</button>
  </form>
</center>
</main>









<?php
require "footer.php";
?>