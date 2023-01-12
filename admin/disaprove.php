<?php

include('connect.php');
$del=$_GET['edit_id'];



 mysqli_query($conn,"UPDATE `pal_tb` SET `status`=2 WHERE login_id='$del'");
 header('location: pal_aprove.php');
?>
