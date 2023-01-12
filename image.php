<?php
session_start();
include "admin/connect.php";




if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  
  $pic=$_FILES['f1']['name'];
  // var_dump($pic);exit();

  if($pic !="")
       {
        $filearray=pathinfo($_FILES['f1']['name']);
        // var_dump($filearray);exit();
  
        $file1=rand();
        $file_ext=$filearray["extension"];
        
        

      if(check_ext($file_ext))
      {
              $filenew=$file1.".".$file_ext;
              move_uploaded_file($_FILES['f1']['tmp_name'],"images/".$filenew);
              //var_dump($filenew);exit();
       } 
       else{
        echo "<script>alert('please check extension')</script>";
       }   
      }






 
  $select=mysqli_query($conn,"INSERT INTO `image_tb`(`name`,`image`) VALUES('$name','$filenew')");
  echo "<script>alert('Successfully uploaed');</script>";
  echo"<script>window.location.href='user_home.php';</script>";
}
function check_ext($f_ext)
      {
        $allowed= array('jpg','JPG','png','jpeg','PNG');
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





<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Request</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<!--  -->
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="home.php">
                              <img src="images/download.jpg" alt="" width="130">
                        </a>
                  </figure>
            </div>
           <!--  -->
      </div>
</section>
<!--Header Upper-->



<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>uploads</h1>
            
        </div>
    </div>
</section>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    
    <main class="app-content">
      <div class="app-title">
        <div>
          
          <p></p>
        </div>
        <!-- <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li> -->
          <!-- <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item"><a href="#"></a></li> -->
        </ul>
      </div>
      <section class="blog-section section style-three pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h3><span>upload</span></h3>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                     <label for="service">Name</label>

                    <input class="form-control" name="name" id="name" type="text" aria-describedby="" placeholder="Patient's name">
                                </div>
                                

                                 <div class="form-group">
                  <label class="control-label">image</label>
                  <input class="form-control" name="f1"type="file">
                </div>


                               <!--  <div class="form-group">
                                    <input type="text" name="quandity" id="quandity" placeholder="quandity" required="">
                                </div> -->
                                
                                                       
                           <!-- <div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="address" id="address" placeholder="Your address" required=""></textarea>
                                </div> -->
                                <div class="form-group text-center">
                                    <button type="submit"name="submit" id="submit"class="btn-style-one">request</button>

                                </div>                            
                            </div>
                            </div>
                        </div>
                      </div>
                    </form>
                                      
            
    </section>       
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
</body>

</html>
