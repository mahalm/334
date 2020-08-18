<?php

 session_start();

  if (isset($_SESSION['username'])) // check whether logged-in/not

  {    $username = $_SESSION['username'];

    $password = $_SESSION['password'];
    
    $userType = $_SESSION['userType'];


    destroy_session_and_data();

    echo "Welcome back <br>

          Your username is '$username'

          and your password is '$password'."; }

  else // not logged-in

 echo "Please <a href='authenticate2.php'>click here</a> to log in.";
 
 function destroy_session_and_data()

  {

    $_SESSION = array();

    setcookie(session_name(), '', time() - 1, '/');

    session_destroy();

  }

?>