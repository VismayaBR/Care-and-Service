<?php

session_start();
include('connect.php');
$edd=$_GET['edit_id'];

$lid=$_SESSION["login_id"];

// var_dump($edd);exit();

mysqli_query($conn,"UPDATE `don_tb` SET `status`='accepted',`pal_log_id`='$lid'  WHERE don_id='$edd'");

echo"<script>alert('donation accepted');</script>";

echo"<script>window.location.href='donation.php';</script>";
?>