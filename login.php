<?php 
  session_start();
  // Set session variables

  if( isset($_SESSION['name']) ){
    header("Location: loginhandle.php");
    exit;

      
  }
  else {
    

  }
    

 
 // header("Location: loginhandle.php");
  //exit;

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Signin Template for Bootstrap</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="text.css" rel="stylesheet">
 
   
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="logincheck.php" method="POST">
      <img class="mb-4" src="n.svg" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">ADMIN Login-In</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="name"   class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" name="password" class="sr-only">Password</label>
      <input type="password" name="pass" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
      <p class="mt-5 mb-3 text-muted">&copy; DAYUM | CONTENT MADE EASIER </p>
    </form>
  </body>
</html>
