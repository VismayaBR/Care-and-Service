<?php
// session_start();
include('connect.php');
$del=$_GET['edit_id'];
$del1=mysqli_query($conn,"DELETE  FROM ser_tb WHERE ser_id='$del'");
// $del2=mysqli_query($conn,"DELETE  FROM  WHERE login_id='$del'");
header('location: ser_view.php');
?>
