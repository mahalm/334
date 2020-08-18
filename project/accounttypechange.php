<?php
require "adminheader.php";
?>

<main><center>
  <h1>Change Account Type </h1></br>
  <form action="accounttypechange_db.php" method="post">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="userType" placeholder="new type">
    <button type="submit" name="submit">Submit</button>
  </form>
</center>
</main>









<?php
require "footer.php";
?>