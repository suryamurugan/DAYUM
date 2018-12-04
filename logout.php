<?php 
  session_start();
  // Set session variables

  if( isset($_SESSION['name']) ){
      // remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header("Location: login.php");
exit();
      
  }
else{
    header("Location: login.php");
    exit();
      
} 

 
 // header("Location: loginhandle.php");
  //exit;

?>