<?php

session_start();
include('connect.php');
$lid=$_SESSION["login_id"];
//var_dump($lid);exit();
$edd=$_GET['edit_id'];
// var_dump($edd);exit();

mysqli_query($conn,"UPDATE `req_tb` SET `status`='accepted',`pal_log_id`='$lid'  WHERE req_id='$edd'");

echo"<script>alert('request accepted');</script>";

echo"<script>window.location.href='request.php';</script>";
?>