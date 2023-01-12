<?php
  include"admin/connect.php";
session_start();
$lid=$_SESSION["login_id"];
//var_dump($lid);exit();
if(!isset($_SESSION['login_id']))
{
  header("location:admin/ad_login.php");
}
$var=mysqli_query($conn,"SELECT * FROM reg_tb WHERE login_id='$lid'");
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Donation</title>

  
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


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            
 <!--End Main Header -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="user_home.php">Home</a>
                        </li>
                       
                  </ul>
            </div>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>PROFILE</h1>
            
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->

<section class="blog-section section style-three pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h3><span></span></h3>
                    </div>
                    <form name="contact_form" class="default-form contact-form" method="post">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- <div class="form-group">
                                    <input type="text" name="name" placeholder="Name"id="name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="name_of_item" placeholder="name_of_item"id="name_of_item" required="">
                                </div>
 --><div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                       
                      <th>email</th>
                       <th>mobile</th>
                       <th>address</th>
                      <th>state </th> 
                      <th>district</th>

                    <th>localbody</th>
                     <th>image</th>
                     <th>Action</th>
                      <!-- <th>Action</th> -->
                      
                      
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                  while($row = mysqli_fetch_assoc($var)) {
                    ?>
                    <tr>
                      
                      <td><?php echo $row['Name']; ?></td>
                       <td><?php echo $row['Email']; ?></td>
                      <td><?php echo $row['Mobile']; ?></td>
                      <td><?php echo $row['Address']; ?></td>
                      <td><?php echo $row['state']; ?></td> 
                      <td><?php echo $row['district']; ?></td> 
                      <td><?php echo $row['localbody']; ?></td> 
                      
                       <td><img src="images/<?php echo $row['image'];?>" height="75" width="75"></td>
                     <td><a href="edit.php?edit_id=<?php echo $row['login_id'];?>" class="button" align="center">EDIT</a></td>

                      
                      
                    </tr>
                    <?php  } ?>
                  </tbody>
                </table>
              </div></div></div></div></div>





                               <!--  <div class="form-group">
                                       <select id="category" name="category"  onclick="clearerror('sloc')"placeholder="select a category"> -->
                           <!--  <option value="">SELECT CATEGORY</option> 
                            <?php
                            while($data=mysqli_fetch_assoc($var)){
                              ?>
                            -->

                         <!--  <option value="food"><td><?php echo $data['cat_name'];?></td> -->
              <!--  </option>
                          <?php
                        }
                        ?>
                           -->
     <!--  </select> --><!-- <span id="sloc" style="color: red"></span></td></tr>
                               
                                <div class="form-group">
                                    <input type="text" name="quandity" id="quandity" placeholder="Quandity" required="">
                                </div>
                           -->
                                                       
                            <div>
                            <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="address" id="address" placeholder="Your address" required=""></textarea>
                                </div> -->
                                <!-- <div class="form-group text-center">
                                    <button type="submit"name="sub" id="sub"class="btn-style-one">DONATE</button>
                                  

                                </div>  
                                          -->                 
                                                          
                            </div>
                            </div>
                        </div>
                      </div>
                    </form>
                                      
            
    </section>       


<!--Scroll to top
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
