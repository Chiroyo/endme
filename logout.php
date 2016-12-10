 <?php

  //start the session
  session_start();
  
  //connect to database
include("includes/openDbConn.php");

// Delete this session
  unset($_SESSION['username']);
  // Delete all session variables
  // session_destroy();

 //return index page
 header('Location: index.php');

  ?>