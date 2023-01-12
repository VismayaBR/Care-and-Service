<?php

include('connect.php');
session_start();
$lid=$_SESSION["login_id"];
//var_dump($lid);exit();
$del=$_GET['edit_id'];


 mysqli_query($conn,"UPDATE `req_tb` SET `status`='rejected',`pal_log_id`='$lid' WHERE req_id='$del'");
header('location:request.php')
 


?> 