<?php // authenticate2.php

  
$hn = "localhost";
$un = "mahalm_admin";
$pw = "password";
$db = "mahalm_library";

  $connection = new mysqli($hn, $un, $pw, $db);



  if ($connection->connect_error) die($connection->connect_error);



  $rec_un = $_REQUEST['userid'];

  $rec_pw = $_REQUEST['password'];
  
  $rec_ut = $_REQUEST['userType'];
  
  if (isset($_REQUEST['userid']) &&

      isset($_REQUEST['password']) && isset($_REQUEST['userType']))

{  

    $un_temp = mysql_entities_fix_string($connection, $rec_un);

    $pw_temp = mysql_entities_fix_string($connection, $rec_pw);
    
    $ut_temp = mysql_entities_fix_string($connection, $rec_ut);
    
    
    

    $query = "SELECT * FROM userinfo WHERE id ='$un_temp'";

     $result = $connection->query($query);

     if (!$result) die($ection->error);
     
     elseif ($result->num_rows)

	{

		$row = $result->fetch_array(MYSQLI_NUM); 

		$result->close();

		$salt1 = "qm&h*";

		$salt2 = "pg!@";

        $token = hash('ripemd128', "$salt1$pw_temp$salt2");

		  echo $token;

                  echo '<br>'.row[1];
                  
                  if ($token == $row[1]) 

		{

			session_start();

			$_SESSION['username'] = $un_temp;

			$_SESSION['password'] = $pw_temp;
			
			$_SESSION['userType'] = $ut_temp;
			
		

		

			echo "you are now logged in";

                                                           header('Location:continue.php');

		}

		else die("Invalid username/password combination");

	}
	
	else die("Invalid username/password combination");

  

}

  else

  {

header('Location:form.php');    

  

  $connection->close();



}

function mysql_entities_fix_string($connection, $string)

  {

    return htmlentities(mysql_fix_string($connection, $string));

  }	



  function mysql_fix_string($connection, $string)

  {

    if (get_magic_quotes_gpc()) $string = stripslashes($string);

    return $connection->real_escape_string($string);

  }

?>