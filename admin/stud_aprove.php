<?php

session_start();
include('connect.php');
$edd=$_GET['edit_id'];
// var_dump($edd);exit();
mysqli_query($conn,"UPDATE `student_reg` SET `status`=1 WHERE login_id='$edd'");

echo"<script>alert('registration aproved');</script>";

echo"<script>window.location.href='student.php';</script>";
?>