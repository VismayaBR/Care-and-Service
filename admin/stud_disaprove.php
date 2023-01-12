<?php

include('connect.php');
$del=$_GET['edit_id'];


 mysqli_query($conn,"DELETE  FROM login_tb WHERE login_id='$del'");

 mysqli_query($conn,"DELETE  FROM student_reg WHERE login_id='$del'");
 header('location: student.php');
?>
