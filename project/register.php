<?php
require "header.php";
?>

<main><center>
  <h1>Register</h1></br>
  <form action="register_db.php" method="post">
    <input type="text" name="userID" placeholder="ID">
    <input type="text" name="password" placeholder="password">
    <input type="text" name="usertype" placeholder="admin or student?">
    <button type="submit" name="registersubmit">Submit</button>
  </form>
</center>
</main>









<?php
require "footer.php";
?>