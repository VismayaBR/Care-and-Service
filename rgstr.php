<?php
include"admin/connect.php";

if(isset($_POST['sub']))
{
  $name=$_POST['name'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $state=$_POST['state'];
  $district=$_POST['district'];
  $localbody=$_POST['localbody'];
  $pic=$_FILES['f1']['name'];
  $username=$_POST['username'];
  $password=$_POST['password'];
   

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


  
  mysqli_query($conn,"INSERT INTO login_tb (username,password,type) VALUES ('$username','$password','user')");
  $last_login_id=mysqli_insert_id($conn);
 $select=mysqli_query($conn,"INSERT INTO `reg_tb`(`login_id`,`name`,`mobile`,`email`,`address`,`state`,`district`,`localbody`,`image`) VALUES('$last_login_id','$name','$mobile','$email','$address','$state','$district','$localbody','$filenew')");
  echo "<script>alert('registration completed');</script>";
  echo"<script>window.location.href='home.php';</script>";
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
  <title>User Registration</title>

  
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
                        <a href="index.html">
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
                              <a href="home.php">Home</a>
                        </li>
                       
                  </ul>
            </div>
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>REGISTRATION</h1>
            
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
                        <h3><span>Register Here</span></h3>
                    </div>
                    <form name="contact_form" class="default-form contact-form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name"id="name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" value=""placeholder="Mobile Number:" required="required"pattern="[0-9].{9}" /><br>
                                
                                                       
                           <div>
                            <!-- <div class="col-md-12 col-sm-12 col-xs-12"> -->
                                <div class="form-group">
                                    <textarea name="address" id="address" placeholder="Your address" required=""></textarea>
                                </div>
                                   <label>District:</label>
                                             <span id="get_dist">
                                                 <select class="select" onchange="get_district(this.value)" name="state" required>
                                                    <option>Select State</option>
                                                    <option>Kerala</option>
                                                 </select></span>
                                        </div>
                                <!-- <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" placeholder="mobile_number" required="">
                                </div>
                                 -->
                                                       
                           <div>
 <div class="form-group">     
 <label class="control-label">location</label>                      
                                  
<script type="text/javascript">
var localbodiesByDistrict = {
Kasargod: ["Select localboy","Manjeswar","Kasargod","Udma","Trikaripur","Kanhangad"],
Kannur: ["Select localboy","Payyannur ","Kalliasseri","Taliparamba","Irikkur","Azhikode","Kannur","Dharmadam","Thalassery","Kuthuparamba","Mattannur","Peravoor"],
Wayanad: ["Select localboy","Mananthavady","Sulthanbathery","Kalpetta"],
Kozhikode: ["Select localboy","Vadakara ","Kuttiadi","Nadapuram","Quilandy","Perambra","Balusseri","Elathur","Kozhikode North","Kozhikode South ","Beypore","Kunnamangalam","Koduvally","Thiruvambadi"],
Malappuram: ["Select localboy","Kondotty ","Ernad","Nilambur","Wandoor","Manjeri","Perinthalmanna","Mankada","Malappuram","Vengara","Vallikunnu","Tirurangadi","Tanur","Tirur","Kottakkal","Thavanur","Ponnani"],
Palakkad: ["Select localboy","Thrithala ","Pattambi","Shornur","Ottappalam","Kongad","Mannarkkad","Malampuzha","Palakkad","Tarur","Chittur","Nemmara","Alathur"],
Trissur: ["Select localboy","Chelakkara ","Kunnamkulam","Guruvayoor","Manalur","Wadakkanchery","Ollur","Thrissur","Nattika","Kaipamangalam","Irinjalakuda","Puthukkad","Chalakudy","Kodungallur"],
Alappuzha: ["Select localboy","Aroor ","Cherthala","Alappuzha","Ambalappuzha","Kuttanad","Haripad","Kayamkulam","Mavelikkara","Chengannur"],
Ernakulam: ["Select localboy","Perumbavoor ","Angamaly","Aluva","Kalamassery","Paravur","Vypeen","Kochi","Thripunithura","Ernakulam","Thrikkakara","Kunnathunad","Piravom","Muvattupuzha","Kothamangalam"],
Idukki: ["Select localboy","Devikulam ","Udumbanchola","Thodupuzha","Idukki","Peerumade"],
Kottayam: ["Select localboy","Pala ","Kaduthuruthy","Vaikom","Ettumanoor","Kottayam","Puthuppally","Changanassery","Kanjirappally","Poonjar"],
Pathanamthitta: ["Select localboy","Thiruvalla ","Ranni","Aranmula","Konni","Adoor"],
Kollam: ["Select localboy","Karunagappally ","Chavara","Kunnathur","Kottarakkara","Pathanapuram","Punalur","Chadayamangalam","Kundara","Kollam","Eravipuram","Chathannoor"],
Thiruvananthapuram: ["Select localboy","Varkala ","Attingal","Chirayinkeezhu","Nedumangad","Vamanapuram","Kazhakoottam","Vattiyoorkavu","Thiruvananthapuram","Nemom","Aruvikkara","Parassala","Kattakkada","Kovalam",
"Neyyattinkara"]
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("localbodiesSelect").innerHTML = "<option></option>";
else {
var localbodiesOptions = "";
for(localbodyId in localbodiesByDistrict[value]) {
localbodiesOptions+="<option>"+localbodiesByDistrict[value][localbodyId]+"</option>";
}
document.getElementById("localbodySelect").innerHTML = localbodiesOptions;
}
}
function displaySelected() { var country = document.getElementById("stateSelect").value;
var localbody = document.getElementById("localbodySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("stateSelect").selectedIndex = 0;
document.getElementById("localbodySelect").selectedIndex = 0;
}
</script>
</head>
<body onload="resetSelection()">
<select id="countrySelect" name="district" size="1" onchange="makeSubmenu(this.value)">
<option value="" disabled selected>Choose District</option>
  <option>Kasargod</option>
  <option>Kannur</option>
  <option>Wayanad</option>
  <option>Kozhikode</option>
  <option>Malappuram</option>
  <option>Palakkad</option>
  <option>Trissur</option>
  <option>Alappuzha</option>
  <option>Ernakulam</option>
  <option>Idukki</option>
  <option>Kottayam</option>
  <option>Pathanamthitta</option>
  <option>Kollam</option>
  <option>Thiruvananthapuram</option>
</select>
<select id="localbodySelect" name="localbody" size="1" >
<option value="" disabled selected>Choose localbody</option>
<option></option>
</select>

                                <div class="form-group">
                  <label class="control-label">image</label>
                  <input class="form-control" name="f1"type="file" required="">
                </div>

                                <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control"id="username" type="text"name="username"placeholder="User name" required="" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label"id="pass" >PASSWORD</label>
            <input class="form-control" type="Password" name="password" id="password" placeholder="Password" minlength="8" maxlength="8" required>
          </div>


                                
                               <!--  <a href=""><button name="btn_login" onclick="return valid()" value="">LOGIN</button></a>
 -->

                                <div class="form-group text-center">
                                    <a href=""><button type="submit"name="sub" id="sub"onclick="return valid()" value="">Submit now</button></a>
                                </div>                            
                            </div>
                            </div>
                        </div>
                      </div>
                    </form>





                                      
            
    </section>       


<!--Scroll to top-->
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


<script>

function valid()
{
  var name=document.getElementById("nm").value;
  var mobile=document.getElementById("mobile").value;
  var email=document.getElementById("email").value;
  /*var gender=document.getElementsByName("gender");*/
  var username=document.getElementById("username").value;
  var password=document.getElementById("passward").value;
  
  
  if(name=="")
  {
    
    document.getElementById("sp1").innerHTML="Please enter your name";
      
    return false;
  }

  if(mobile=="")
  {
    
    document.getElementById("sp2").innerHTML="Please enter your mobile";
    
    return false;

  }

  if(email=="")
  {
    
    document.getElementById("sp3").innerHTML="Please give valid email";
    return false;
  }

  /*flag=0;
  
  for(i=0;i<gender.length;i++)
  {
    
  if(gender[i].checked==true)
  {   
    flag=1;
    break;
      
  }
  }
  
  if(flag==0)
  {
      document.getElementById("sp5").innerHTML="Please select gender";
    return false;
  }*/
  
  
  
  if(username=="")
  {
    document.getElementById("sp7").innerHTML="Please enter username";
    return false;
  }
  
  if(password=="")
  {
    document.getElementById("sp8").innerHTML="Please enter password";
    return false;
  }       
  
  
}

function clearmsg(sp)
{
  document.getElementById(sp).innerHTML="";
}

</script>

</html>
