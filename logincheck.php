<?php
include('dbconnect.php');
$name = $_POST['name'];
$pass = $_POST['pass'];



 $sql="SELECT * FROM admin WHERE adminname='$name'";
//$sql = "SELECT * FROM tbl_Freelancers WHERE User_Username = '".$username."'";

if ($result=mysqli_query($conn,$sql))
{
// Fetch one and one row
$row=mysqli_fetch_row($result); 

    //echo $row['adminname'];
   if($name == $row['1']){
    //echo "user nameis present   ";
    if($pass == $row['2'] ){
        echo "user exsists";
        
        session_start();
        // Set session variables
        $_SESSION["name"] = $name;
        $_SESSION["pass"] = $pass;
        header("Location: loginhandle.php");
        exit;
   
        
    }
    else{
  //      $message = "wrong answer";
//echo "<script type='text/javascript'>alert('$message');</script>";
      header("Location: login.php");
     exit;
    }
   } 
    else{
        header("Location: login.php");
        exit;
    }

}

echo mysqli_error($conn);
/*
session_start();
// Set session variables
$_SESSION["email"] = $email;
$_SESSION["pass"] = $pass;

echo $_SESSION['email'];
echo $_SESSION['pass'];
*/




?>