<?php

require "header.php";

echo <<<_END

<html> <head>  <center><h1>Add Book</h1></br>
 <link href="form.css" type="text/css" rel="stylesheet" /> </head> <body>

<form action="authenticate2.php" method="post">

  

  <input type="text" name="userid" placeholder="user id"/>  <br/>
  <input type="password" name="password" placeholder="password"/>  <br/>
  <input type="text" name="userType" placeholder="admin or student?"/>  <br/>
  <input type="submit" name="submit" value="Submit"/>

</form></center><body>

_END;

?>