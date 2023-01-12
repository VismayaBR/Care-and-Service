<?php

session_start();
include('connect.php');
$edd=$_GET['edit_id'];
// var_dump($edd);exit();
mysqli_query($conn,"UPDATE `pal_tb` SET `status`=1 WHERE login_id='$edd'");

echo"<script>alert('registration aproved');</script>";

echo"<script>window.location.href='pal_aprove.php';</script>";
?>