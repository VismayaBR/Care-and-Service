<?php
session_start();

$_SESSION["user_id"]="";

session_destroy();

header("location: ad_login.php");
?>
