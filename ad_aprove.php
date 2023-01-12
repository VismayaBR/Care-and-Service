<?php

include('admin/connect.php');

$details=$_GET['aprove_id'];
$ap=mysqli_query($conn,"SELECT * FROM public_tb");
$result=mysqli_fetch_assoc($ap);





if (isset($_POST['sub']))
{
  $name=$_POST['name'];
   $name=$_POST['age'];
    $name=$_POST['address'];
  $email=$_POST['email'];
  
  //$qualification=$_POST['qua'];
  
  $username=$_POST['user'];
  $password=$_POST['pass'];
  

$update=mysqli_query($conn,"UPDATE register JOIN login ON login.login_id=register.login_id SET name='$name', email='$email', mobile='$mobile', gender='$gender', location='$location', username='$username', password='$password' WHERE register.login_id='$details'");
  header('location: homepage.php');
}
function check_ext($f_ext)
      {
        $allowed= array('jpg','png','jpeg');
        if(in_array($f_ext,$allowed))
        {
          return true;
        }
        else
        {
          return false;
        }
      }

?>