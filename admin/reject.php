<?php

include('connect.php');

session_start();
$lid=$_SESSION["login_id"];

$del=$_GET['edit_id'];


 mysqli_query($conn,"UPDATE `don_tb` SET `status`='rejected',`pal_log_id`='$lid'  WHERE  don_id='$del'");
header('location:donation.php')
 
?> 