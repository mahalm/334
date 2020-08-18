<?php
require "header.php";
?>

<main><center>
  <h1>Change Account Password </h1></br>
  <form action="passwordchange_db.php" method="post">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="password" placeholder="new password">
    <button type="submit" name="submit">Submit</button>
  </form>
</center>
</main>









<?php
require "footer.php";
?>