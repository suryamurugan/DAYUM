<?php 

  include('dbconnect.php');
  //run the store proc
  $result = mysqli_query($conn, 
     "CALL SURYA") or die("Query fail: " . mysqli_error());

  //loop the result set
  while ($row = mysqli_fetch_array($result)){   
      echo $row[0] . " - " . + $row[1]; 
  }
/*
CREATE TRIGGER `backup` AFTER INSERT ON `user_details` FOR EACH ROW INSERT INTO `user_details` (`first_name`, `last_name`, `user_name`, `password`, `user_id`, `passport_no`, `address`, `city`, `state`, `zip`) VALUES ('ckknnsdk', 'lkvdsnlkv', 'lkvdsnlknv', 'lkvndlkn', NULL, '12', 'lkcndsln', 'lkncdlkn', 'cndlkn', '231');
*/
?>