<?php

echo $subject_code = $_POST['subject_code'];
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
echo $video_links = $_POST['video_links'];


include('dbconnect.php');

//$sql = "INSERT INTO `data` (`subject_code`, `subject_name`) VALUES ('$subject_code','$subject_name')";
$sql = "UPDATE `data` SET subject_name='$subject_name' WHERE subject_code='$subject_code'";
if($result=mysqli_query($conn,$sql)){
    echo "truedata";
     
}
else{

    echo("Error description: " . mysqli_error($conn));
}
          

   
//$sql = "INSERT INTO `notes` (`subject_code`,`m1`, `m2`, `m3`, `m4`, `m5`) VALUES ('$subject_code','$m1','$m2','$m3','$m4','$m5')";
$sql = "UPDATE `notes` SET m1='$m1',m2='$m2',m3='$m3',m4='$m4',m5='$m5' WHERE subject_code='$subject_code'";
if($result=mysqli_query($conn,$sql)){
    echo "truedata";    
}
else{
    echo("Error description: " . mysqli_error($conn));
}

//$sql = "INSERT INTO `question_papers` (`subject_code`,`june2018`, `jan2018`, `june2017`, `jan2017`) VALUES ('$subject_code','$june2018','$jan2018','$june2017','$jan2017')";
$sql = "UPDATE `question_papers` SET june2018='$june2018',jan2018='$jan2018',june2017='$june2017',jan2017='$jan2017' WHERE subject_code='$subject_code'";
if($result=mysqli_query($conn,$sql)){
    echo "truedataq";    
}


//$sql = "INSERT INTO `other_resources` (`subject_code`,`video`) VALUES ('$subject_code','$video_links')";
$sql = "UPDATE `other_resources` SET video='$video_links'  WHERE subject_code='$subject_code'";
if($result=mysqli_query($conn,$sql)){
    echo "   ";
    echo "doen";    
}
else {
echo "failed" ;
echo mysqli_error($conn);
}

//else{
 //   echo("Error description: " . mysqli_error($conn));/
//}

//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} 
//else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();





?>