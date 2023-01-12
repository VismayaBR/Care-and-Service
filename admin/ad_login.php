



<?php
session_start();

include('connect.php');
if(isset($_SESSION["user_id"]))
{
  header("location:dashboard.php");
}

if (isset($_POST['submit']))
{
  $username=$_POST['user'];
  $password=$_POST['pass'];


  $query= mysqli_query($conn, "SELECT * FROM login_tb WHERE username='$username' AND password='$password'");
  

  if(mysqli_num_rows($query)>0)
      {
         
        $row=mysqli_fetch_assoc($query);
 $type=$row['type'];
           
            $username=$row['username'];

            $lid=$row['login_id'];
        

        if($row['type']=='admin'){
           $_SESSION["user_id"]=$row['login_id'];
           $_SESSION["login_id"]=$lid;
        $_SESSION['type']=$type;
         header("location: dashboard.php");

        }
        if($row['type']=='paliative_unit')
        {
          $aprove=mysqli_query($conn,"SELECT * FROM pal_tb WHERE login_id='$lid'");
          $checking_aproval=mysqli_fetch_assoc($aprove);
          //var_dump($checking_aproval);exit();
          if($checking_aproval['status']=='1')
          {
            $_SESSION['login_id']=$lid;
             $_SESSION['username']=$username;
             $_SESSION['type']=$type;
              header("location: dashboard.php");

          }
if($checking_aproval['status']=='2') 
          {
            echo"<script>alert('you are rejected...!')</script>";
          }
        if($checking_aproval['status']=='0') 
        {
          echo"<script>alert('waiting for approval...!')</script>";
        }

         } 
          
        if($row['type']=='user'){
          $aprove=mysqli_query($conn,"SELECT * FROM reg_tb WHERE login_id='$lid'");

            $checking_aproval=mysqli_fetch_assoc($aprove);

           $_SESSION["login_id"]=$lid;
           
        $_SESSION["type"]=$type;
         header("location: ../user_home.php");
        }
        

 
          else 
          {
            // echo"<script>alert('waiting for aproval')</script>";
          }
        

          }
            
    else
        {
            echo "<script> alert('incorrect username or password')</script>";
            
 }
}
  











?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Care And Service</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control"id="user" type="text"name="user"id="user" placeholder="usre name" autofocus required="">
          </div>
          <div class="form-group">
            <label class="control-label"id="pass" >PASSWORD</label>
            <input class="form-control" type="password" name="pass" id="pass" placeholder="Password" minlength="8" maxlength="8" required>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
               <!--  <label>
                  <input type="checkbox"><span class="label-text" name="submit">Stay Signed in</span>
                </label> -->
              <!-- </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div> -->
          </div>
        </div>
      </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button><br>
            <a href="../home.php"> Home</a>
          </div>
        </form>
        <form class="forget-form" >
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>