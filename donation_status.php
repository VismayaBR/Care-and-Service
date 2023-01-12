<?php
include"admin/connect.php";
session_start();

$lid=$_SESSION["login_id"];
//var_dump($lid);exit();
$var=mysqli_query($conn,"SELECT * FROM don_tb WHERE log_id='$lid' ");
  
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
            <h1>DONATION STATUS</h1>
            
        </div>
    </div>
</section>

</nav>
<!--End Page Title-->

<!-- Contact Section -->
  <section class="appoinment-section section">
  <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="accordion-section">
    <div class="section-title">
        <h3></h3>
    </div>
    <div class="">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a  data-toggle="collapse" data-parent="#accordion" >
                            My Donations
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <div class="row" align="center">
        <div class="row" align="center">
        <div class="col-md-6" align="center">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <table class="table">
              <thead align="center">
                <tr>
                  <th>Donations</th>
                  <th>Status</th>
                  
                </tr>
              </thead>
              <tbody>
                

                  <?php
                while( $data=mysqli_fetch_assoc($var)){
                ?>
                <tr>
                 
               <td><?php echo $data['name_of_item'];?></td>
                 <td><?php echo $data['status'];?></td>
                  
                </tr>
                <?php } ?>
                </tbody>
            </table>
          </div>
        </div>

</div></div></nav></div></body>

</div></div></nav></div> 



                    </div>
                </div>
            </div>
</body>




                                      
            
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
