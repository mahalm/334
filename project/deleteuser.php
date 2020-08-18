<?php
require "adminheader.php";
?>

<main><center>
  <h1>Delete User</h1></br>
  <form action="deleteuser_db.php" method="post">
    <input type="text" name="id" placeholder="User ID">
    <button type="submit" name="submit">Submit</button>
  </form>
</center>
</main>









<?php
require "footer.php";
?>