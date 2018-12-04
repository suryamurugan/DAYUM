<?php 
  session_start();
  // Set session variables

  if( isset($_SESSION['name']) ){
     // echo "yes";

      
  }
  else {
    header("Location: login.php");
    exit;

  }
    

 
 // header("Location: loginhandle.php");
  //exit;

?>   
   
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  
    <title>Hello, world!</title>
<!-- NAVBAR-->
<!-- <nav class="navbar navbar-expand-lg navbar-light style="background-color: #e3f2fd;">-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff  ;">
<a class="navbar-brand" href="login.php">
   <!-- <img src="n.svg" width="30" height="30" class="d-inline-block align-top" alt=""> -->
    DAYUM
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="loginhandle.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addnew.php">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editselect.php">Edit/Delete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="logout.php">Log Out</a>
      </li>
    </ul>
  </div>
</nav>

<!-- -->


  </head>
  <body>


<section class="jumbotron text-center" style="padding-top: 30px;padding-bottom: 0px;background:white">
  <div class="container">
  <img src="n.svg" width="80" height="80" class="d-inline-block align-top" alt="">
  <h1><span class="badge badge-secondary">DAYUM</span></h1>
        <!--  <h1 class="jumbotron-heading">Album example</h1> -->
        <p class="lead text-muted">Add new Data</p> 
        </div>
        
</section>

<div class="container">

  <form method="POST" action="addnew2.php">
  <div class="form-row">
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="subject_code" placeholder="Subject Code">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="subject_name" placeholder="Subject Name">
    </div>
  </div>
  <h5><span class="badge badge-secondary">Notes Links</span></h5>
  <div class="form-row">
  <div class="form-group">
    <input type="text" class="form-control"  name="m1"placeholder="Module 1">
  </div>
  <div class="form-group">
  <input type="text" class="form-control"  name="m2" placeholder="Module 2">
  </div>
  <div class="form-group">
  <input type="text" class="form-control"  name="m3" placeholder="Module 3">
  </div>
  <div class="form-group">
  <input type="text" class="form-control"  name="m4" placeholder="Module 4">
  </div>
  <div class="form-group">
  <input type="text" class="form-control" name="m5" placeholder="Module 5">
  </div>
  </div>
  <h5><span class="badge badge-secondary">Question Papers Links</span></h5>
  <div class="form-row">
  <div class="form-group">
    <input type="text" class="form-control" name="june2018"  placeholder="June 2018">
  </div>
  <div class="form-group">
  <input type="text" class="form-control" name="jan2018"  placeholder="Jan 2018">
  </div>
  <div class="form-group">
  <input type="text" class="form-control" name="june2017" placeholder="June 2017">
  </div>
  <div class="form-group">
  <input type="text" class="form-control" name="jan2017" placeholder="Jan 2017">
  </div>
  </div>
  <h5><span class="badge badge-secondary">Other Resources Links</span></h5>
  <div class="form-row">
  <div class="form-group">
    <input type="text" class="form-control" name="video_links" placeholder="Video Links">
  </div>
  </div>


  <button type="submit" class="btn btn-primary">ADD</button>
</form>


<div>
</body>
</html>