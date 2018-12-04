<?php 
  session_start();
  // Set session variables

  if( isset($_SESSION['name']) ){
     echo "yes";

      
  }
  else {
    header("Location: login.php");
    exit;

  }
    

 
 // header("Location: loginhandle.php");
  //exit;

?>   <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
   <title>Hello, world!</title>
  </head>
   <body>
    <main role="main">
      <section class="jumbotron text-center" style="padding-top: 30px;padding-bottom: 0px;background:white">
        <div class="container">
        <h1>Welcome to <span cla                                              ss="badge badge-secondary">DAYUM</span></h1>
        <!--  <h1 class="jumbotron-heading">Album example</h1> -->
          <p class="lead text-muted">An Innovative content hub.</p>
       </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">          
<!--Start -->
<?php 
include('dbconnect.php');
$subject_code= $_GET['subject_code'];   
// sql to delete a record
$sqldata = "DELETE FROM data WHERE subject_code='$subject_code'";
//$sqldata = "DELETE FROM data WHERE subject_code=$subject_code";
if ($result=mysqli_query($conn,$sqldata))
{
    echo '  
    <div class="card border-danger mb-6" style="cursor: pointer;" href="www.google.com">
      <div class="card-header"></div>
      <div class="card-body text-danger">
        <h1 class="card-title">Deleted data for '.$subject_code.' </h1>
        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>-->
        <a href="login.php"><h5 class="card-title">Jump Back to Home</h5></a>
        
        
  </div>';
}
/*
if ($result=mysqli_query($conn,$sql))
{
// Fetch one and one row
//while ($row=mysqli_fetch_array($result))
//{
 // echo '<h1>'.$row['subject_code'].'</h1';
//}
// Free result set
//mysqli_free_result($result);
}
else{
echo "query failed";
}
*/
echo mysqli_error($conn);
mysqli_close($conn);
?>         
<!-- end -->     
          </div>
        </div>
      </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>