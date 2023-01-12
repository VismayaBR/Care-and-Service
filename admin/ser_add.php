<?php
include"connect.php";
session_start();

if(isset($_POST['sub']))
{
  $service=$_POST['service'];
  $description=$_POST['description'];
 
  $image=$_FILES['f1']['name'];

             

             if($image !="")
                  {
                      $filearray=pathinfo($_FILES['f1']['name']);
                     // var_dump($filearray);exit;
                      $file1=rand();
                      $file_ext=$filearray["extension"];

                          if(check_ext($file_ext))
                              {
                                    $filenew=$file1.".".$file_ext;
                                    move_uploaded_file($_FILES['f1']['tmp_name'],"images/".$filenew);
                              }
                          else
                              {
                                    echo "<script> alert('please check file extension')</script>";
                              }
        
                   }
  // var_dump($filenew);
  // exit();
  
  mysqli_query($conn,"INSERT INTO ser_tb (service,description,image) VALUES ('$service','$description','$filenew')");
  header("location: ser_view.php");

  
  echo "<script>alert('Successfully added')</script>";
  }

function check_ext($f_ext)
      {
        $allowed= array('jpg','JPG','png','jpeg');
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
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Service</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php
    include'header.php';
    ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php
    include'sidebar.php';
    ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Care and Service</h1>
          <p></p>
        </div>
        <!-- <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li> -->
          <!-- <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item"><a href="#"></a></li> -->
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="service">service</label>

                    <input class="form-control" name="service" id="service" type="text" aria-describedby="" placeholder="enter services">

                    <input class="form-control" name="description" id="description" type="text" aria-describedby="" placeholder="enter a paragraph">

                    <!-- <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small> -->
                  </div>
                  <div class="form-group">
                  <label class="control-label">image</label>
                  <input class="form-control" name="f1"type="file">
                </div>
                  
            <div class="tile-footer">
              <button class="btn btn-primary" name="sub" id="sub" type="submit">add</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>