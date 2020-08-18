<?php

$hn = "localhost";
$un = "mahalm_admin";
$pw = "password";
$db = "mahalm_library";

$conn = mysqli_connect($hn, $un, $pw, $db);

if(!$conn){
  die("Connection Failure " . mysqli_connect_error());
}

?>
