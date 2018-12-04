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
    </head>
    <body>

    <?php
    //include(dbconnect.php);

    $subject_code = $_GET['subject_code'];
    $subject_name = $_GET['subject_name'];
    echo '<section class="jumbotron text-center" style="padding-top: 30px;padding-bottom: 0px;background:white">
    <div class="container">
    <h1>'.$subject_name.'   <span class="badge badge-secondary">'.$subject_code.'</span></h1>
        <!--  <h1 class="jumbotron-heading">Album example</h1> -->
        <p class="lead text-muted">Update Data</p> 
        </div>
        
    </section>
    ';
    include('dbconnect.php');
        
    $sql="SELECT * FROM data WHERE `subject_code`=$subject_code";
    if($result=mysqli_query($conn,$sql)){
        
    }
    echo '<div class="container">
    <form method="POST" action="update.php">
    <div class="form-row">
    <div class="form-group col-md-4">
        <input type="text" class="form-control" name="subject_code" value="'.$subject_code.'" placeholder="Subject Code">
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="subject_name" value="'.$subject_name.'" placeholder="Subject Name">
    </div>
    </div>';

    $sql="SELECT * FROM notes WHERE `subject_code`='$subject_code'";
    if($result=mysqli_query($conn,$sql)){
    // / Fetch one and one row
    while ($row=mysqli_fetch_row($result))
        {
            $m1 =$row[1];
            $m2 = $row[2];
            $m3 = $row[3];
            $m4 = $row[4];
            $m5 = $row[5];
        }
    
    echo '<h5><span class="badge badge-secondary">Notes Links</span></h5>
    <div class="form-row">
    <div class="form-group">
    <input type="text" class="form-control"  name="m1" value="'.$m1.'" placeholder="Module 1">
    </div>
    <div class="form-group">
    <input type="text" class="form-control"  name="m2" value="'.$m2.'"  placeholder="Module 2">
    </div>
    <div class="form-group">
    <input type="text" class="form-control"  name="m3"  value="'.$m3.'" placeholder="Module 3">
    </div>
    <div class="form-group">
    <input type="text" class="form-control"  name="m4" value="'.$m4.'"  placeholder="Module 4">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="m5" value="'.$m5.'"  placeholder="Module 5">
    </div>
    </div>';
    }
    else{
        echo "failed";
        echo mysqli_error($conn);
    }
    $sql="SELECT * FROM question_papers WHERE `subject_code`='$subject_code'";
    if($result=mysqli_query($conn,$sql)){
        // / Fetch one and one row
    while ($row=mysqli_fetch_row($result))
        {
            $june2018 =$row[1];
            $jan2018 = $row[2];
            $june2017 = $row[3];
            $jan2017 = $row[4];
        }

    echo '<h5><span class="badge badge-secondary">Question Papers Links</span></h5>
    <div class="form-row">
    <div class="form-group">
    <input type="text" class="form-control" name="june2018" value="'.$june2018.'" placeholder="June 2018">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="jan2018"  value="'.$jan2018.'"   placeholder="Jan 2018">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="june2017"  value="'.$june2017.'"  placeholder="June 2017">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="jan2017"  value="'.$jan2018.'" placeholder="Jan 2017">
    </div>
    </div>';

    }
    $sql="SELECT * FROM other_resources WHERE `subject_code`='$subject_code'";
    if($result=mysqli_query($conn,$sql)){
        // / Fetch one and one row
    while ($row=mysqli_fetch_row($result))
        {
            $video =$row[1];
            
        }

        echo '<h5><span class="badge badge-secondary">Other Resources Links</span></h5>
        <div class="form-row">
        <div class="form-group">
        <input type="text" class="form-control" name="video_links" value="'.$video.'" placeholder="Video Links">
        </div>
        </div>';

        echo '<button type="submit" class="btn btn-primary">Update</button>
        </form>
        <section class="jumbotron text-center" style="padding-top: 30px;padding-bottom: 0px;background:white">
        <div class="container">
        <h4>Delete the Subject & all its data</h4>
            <!--  <h1 class="jumbotron-heading">Album example</h1> -->
           <a href="delete.php?subject_code='.$subject_code.'"> <p class="lead text-muted"><span class="badge badge-danger" style="cursor: pointer;" >Delete Subject</span></p> </a>
            </div>
        </section>
        </div>';

    }

    ?>

    
    
    


    



    </body>
    </html>