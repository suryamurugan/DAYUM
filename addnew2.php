<?php 
  session_start();
  // Set session variables

  if( isset($_SESSION['name']) ){
     echo "New data added!";

      
  }
  else {
    header("Location: login.php");
    exit;

  }
    

 
 // header("Location: loginhandle.php");
  //exit;

?>   

<?php

$subject_code = $_POST['subject_code'];
$subject_name = $_POST['subject_name'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$june2018 = $_POST['june2018'];
$jan2018 = $_POST['jan2018'];
$june2017 = $_POST['june2017'];
$jan2017 = $_POST['jan2017'];
$video_links = $_POST['video_links'];

include('dbconnect.php');

$sql = "INSERT INTO `data` (`subject_code`, `subject_name`) VALUES ('$subject_code','$subject_name')";
if($result=mysqli_query($conn,$sql))
                        echo "truedata";
$sql = "INSERT INTO `notes` (`subject_code`,`m1`, `m2`, `m3`, `m4`, `m5`) VALUES ('$subject_code','$m1','$m2','$m3','$m4','$m5')";
if($result=mysqli_query($conn,$sql))
                        echo "truenotes";
$sql = "INSERT INTO `question_papers` (`subject_code`,`june2018`, `jan2018`, `june2017`, `jan2017`) VALUES ('$subject_code','$june2018','$jan2018','$june2017','$jan2017')";
if($result=mysqli_query($conn,$sql)){
    echo "truepapers";
    
}
                        else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

$sql = "INSERT INTO `other_resources` (`subject_code`,`video`) VALUES ('$subject_code','$video_links')";
if($result=mysqli_query($conn,$sql))
                    
header("Location: loginhandle.php");


//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>