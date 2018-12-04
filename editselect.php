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


<!-- end -->     
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

  

  

    <main role="main">

      <section class="jumbotron text-center" style="padding-top: 30px;padding-bottom: 0px;background:white">
        <div class="container">
        <img src="n.svg" width="80" height="80" class="d-inline-block align-top" alt="">
        <h1>Welcome to <span class="badge badge-secondary">DAYUM</span></h1>
        <!--  <h1 class="jumbotron-heading">Album example</h1> -->
          <p class="lead text-muted">An Innovative content hub.</p>

         
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
<!--Start -->


<?php 
include('dbconnect.php');
    
$sql="SELECT * FROM data";

if ($result=mysqli_query($conn,$sql))
{
// Fetch one and one row
while ($row=mysqli_fetch_array($result))
{
 // echo '<h1>'.$row['subject_code'].'</h1';
  echo '<div class="col-md-4">  
  <a href="edit.php?subject_code='.$row['subject_code'].'&subject_name='.$row['subject_name'].'" >         
    <div class="card border-success mb-3" style="max-width: 18rem;cursor: pointer;" href="www.google.com">
      <div class="card-header">'.$row['subject_code'].'</div>
      <div class="card-body text-success">
        <h3 class="card-title">'.$row['subject_name'].'</h3>
        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>-->
      </div>
    </div>
    </a>
  </div>';
  
}
// Free result set
//mysqli_free_result($result);
}
else{
echo "query failed";
}

mysqli_close($conn);
?>


            
<!-- end -->     
          </div>
        </div>
      </div>

      
    </main>

    
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          
        </p>
        <p>DAYUM &copy; Content Made Easier To Access</p>
        <!-- <p>Admin <a href="logout.php">Logout</a></p> -->
      </div>
    </footer>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>