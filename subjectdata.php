<!doctype html>
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
        <img src="n.svg" width="100" height="100" class="d-inline-block align-top" alt="">
         <?php
        $subject_code = $_GET['subject_code'];
        $subject_name = $_GET['subject_name'];

       // echo $subject_code;
        //echo $subject_name;
        echo '  <h1><span class="badge badge-secondary">'.$subject_name.'</span></h1>
        <!--  <h1 class="jumbotron-heading">Album example</h1> -->
        <p class="lead text-muted">'.$subject_code.'</p> 
        </div>
      </section>
      ';
        ?>


      
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
<!--Start -->
<?php 
include('dbconnect.php');
    
$sql="SELECT * FROM data";
$sqlnotes="SELECT * FROM notes";
$sqlquestionpapers="SELECT * FROM question_papers";
$sqlotherresources="SELECT * FROM other_resources";


if ($result=mysqli_query($conn,$sqlnotes))
{
    $row=mysqli_fetch_array($result);
    
    $m1 = $row["m1"];
$m2 = $row["m2"];
$m3 = $row["m3"];
$m4 = $row["m4"];
$m5 = $row["m5"];
/*$june2018 = $_POST['june2018'];
$jan2018 = $_POST['jan2018'];
$june2017 = $_POST['june2017'];
$jan2017 = $_POST['jan2017'];
$video_links = $_POST['video_links'];
  */  
}
// Fetch one and one row
//while ($row=mysqli_fetch_array($result))
//{

     // FOR NOTES 
    echo '<div class="col-md-4">  
    <div class="card border-success mb-3" style="cursor: pointer;" href="www.google.com">
      <div class="card-header">NOTES</div>
      <table class="table table-bordered">
      <tbody>
        <tr>
        <th scope="row"><a href="'.$row["m1"].'">Module 1</a></th>
        </tr>
        <tr>
        <th scope="row"><a href="'.$row["m2"].'">Module 2</th>
        </tr>
        <th scope="row"><a href="'.$row["m3"].'">Module 3</th>
        </tr>
        <th scope="row"><a href="'.$row["m4"].'">Module 3</th>
      </tr>
      <th scope="row"><a href="'.$row["m5"].'">Module 3</th>
    </tr>
        
      </tbody>
    </table>
      </div>
  </div>';


// FOR Question Papers 

if ($result=mysqli_query($conn,$sqlquestionpapers))
{
    $row=mysqli_fetch_array($result);
    
    $june2018 = $row["june2018"];
    $jan2018 = $row["jan2018"];
    $june2017 = $row["june2017"];
    $jan2017 = $row["jan2017"];
}

echo '<div class="col-md-4">  
<div class="card border-success mb-3" style="cursor: pointer;" href="www.google.com">
  <div class="card-header">QuestionPapers</div>
  <table class="table table-bordered">
  <tbody>
    <tr>
    <th scope="row"><a href="'.$june2018.'">June 2018</a></th>
    </tr>
    <tr>
    <th scope="row"><a href="'.$jan2018.'">Jan 2018</a></th>
    </tr>
    <th scope="row"><a href="'.$june2017.'">June 2017</a></th>
    </tr>
    <th scope="row"><a href="'.$jan2017.'">Jan 2017</a></th>
  </tr>
</tr>
  </tbody>
</table>
  </div>
</div>';

// FOR Other Resources 

if ($result=mysqli_query($conn,$sqlotherresources))
{
    $row=mysqli_fetch_array($result);
    
    $videos = $row["video"];
    
}
echo '<div class="col-md-4">  
<div class="card border-success mb-3" style="cursor: pointer;" href="www.google.com">
  <div class="card-header">Other Resources</div>
  <table class="table table-bordered">
  <tbody>
    <tr>
    <th scope="row"><a href="'.$videos.'">Video Links</a></th>
    </tr>
  
</tr>
  </tbody>
</table>
  </div>
</div>';
  


  //
//}


// Free result set
//mysqli_free_result($result);
//}
//else{
//echo "query failed";
//}

//mysqli_close($conn);
?>


            
<!-- end -->     
          </div>
        </div>
      </div>

      
    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      <!--  <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p> -->
        <p>DAYUM -Content Made Easier</p>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>