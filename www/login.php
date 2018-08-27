<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/connect.php');
$message=NULL;
if (isset($_POST['Username'], $_POST['Password'])){
  $Username=$_POST['Username'];
  $Password=base64_encode($_POST['Password']);
$result = $con->prepare("SELECT * FROM users WHERE username ='".$Username."' OR email ='".$Username."' ");
      $result->execute();
$row = $result->fetch();
if($row>0){
  if($row['verify']==0)
    $message="User's Email is not verify! Please check your inbox.";
  else if($row['verify']==1){
    if($row['password']==$Password){
      $_SESSION["Username"] = $row['user_id'];
    $_SESSION["Password"] = $row['password'];     
  header("location:user_profile.php");
    }

    else{
      $message = "Invalid Password!";
    }
    
  }
  
}
else {
  $message="Invalid Username or Email";
}
}
else if(isset($_SESSION["Username"])) {     
      header("location:user_profile.php");
  } 

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="Neikee" />
  <meta name="keywords" content="funding,Crowdfunding,NGO,social,social cause,Neikee" />
  <meta name="author" content="Kodexlabs" />

  <!-- Page Title -->
  <title>Neikee - Charity & Crowdfunding Neikee</title>

  <!-- Favicon and Touch Icons -->
  <link href="images/favicon.png" rel="shortcut icon" type="image/png">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

  <!-- Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/css-plugin-collections.css" rel="stylesheet"/>
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
  <!-- CSS | Main style file -->
  <link href="css/style-main.css" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

  <!-- Revolution Slider 5.x CSS settings -->
  <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

  <!-- CSS | Theme Color -->
  <link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="js/jquery-2.2.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="js/jquery-plugin-collection.js"></script>

  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
  <div class="body-overlay"></div>
  <div id="side-panel" class="dark" data-bg-img="images/Rose/Jamghat(13).JPG">
    <div class="side-panel-wrap">
      <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon_close font-30"></i></a></div>
      <a href="javascript:void(0)"><img alt="logo" src="images/logo-wide.png"></a>
      <div class="side-panel-nav mt-30">
        <div class="widget no-border">
          <nav>
            <ul class="nav nav-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">Register With Us</a></li>
              <li><a class="tree-toggler nav-header">Campaigns <i class="fa fa-angle-down"></i></a>
                <ul class="nav nav-list tree">
                  <!-- <li><a href="HVI/campaign_desktop.php">Hockey Village India</a></li> -->
                  <li><a href="Sakhi/campaign_desktop.php">Girls Learning Centre</a></li>
                  <li><a href="Jamghat/campaign_desktop.php">Children Don't Belong on the Streets</a></li>
                  <li><a href="Rose/campaign_desktop.php">Next IT Whiz Kid from Rural India</a></li>
                  <li><a href="Sakar/campaign_desktop.php">Breaking Gender Barriers</a></li>
                </ul>
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>        
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div id="wrapper" class="clearfix">
    <!-- Header -->
    <header class="header">
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
          <div class="container">
            <nav id="menuzord" class="menuzord orange bg-light pull-left">
              <div class="pull-left" style="padding-right:1.2em !important; padding-top: 1em !important;">
                <img src="images/logo.png" alt="">
              </div>
              <ul class="menuzord-menu" style="margin-left:2em; float:right !important;">
                <li class="active"><a href="#home">Home</a>
                <li><a href="about.php">About Us</a>
                  <li><a href="#">Campaigns<span class="label label-warning"></span></a>
                    <ul class="dropdown">
                     <!-- <li><a href="HVI/campaign_desktop.php">Hockey Village India</a></li> -->
                     <li><a href="Sakhi/campaign_desktop.php" target="blank">Girls Learning Centre</a></li>
                     <li><a href="Jamghat/campaign_desktop.php" target="blank">Children Don't Belong on the Streets</a></li>
                     <li><a href="Rose/campaign_desktop.php" target="blank">Next IT Whiz Kid from Rural India</a></li>
                     <li><a href="Sakar/campaign_desktop.php" target="blank">Breaking Gender Barriers</a></li>
                   </ul>
                 </li>
                 <li><a href="contact.php">Contact Us</a></li>
                <!--  <li><a href="#">Register With Us</a></li> -->
                 <ul class="pull-right hidden-sm hidden-xs">
                  <li>
                    <a class="btn btn-colored btn-flat btn-theme-colored mt-15" 
                    <?php
                    if(isset($_SESSION["Username"]) && isset($_SESSION["Password"])){
                      echo 'href="user_profile.php" > '.$row['name'].'</a>';
                    }
                    else
                      echo 'href="login.php"> Login/Register';
                    ?>
                    ></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
  </li></ul></nav></div></div></div>
</header>
        <!-- Modals -->


        <div class="modal fade" id="resetPass" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Password Reset</h3>
                    <h4>Enter your Username/Email</h4>
                    <form id="reset-form" name="reset-form" method="post" action="javascript:return false">
                    <input id="user_id" name="user_id" class="form-control required email" aria-required="true">
                    <input type="hidden" name="reset" id="reset" value="true">
                    
                    <br>
                    <button type="submit" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                    <div style="display: none;" id="loading"><img src="images/loading.gif"><a>Please wait...</a></div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="setPass" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Password Reset</h3>
                    <h4>Enter your new Password</h4>
                    <form id="setPass-form" name="setPass-form" method="post" action="javascript:return false">
                    <input id="newPass1" name="newPass1" type="password" class="form-control required email" placeholder="New Password" aria-required="true">
                    <input id="newPass2" name="newPass2" type="password" class="form-control required email" placeholder="Repeat Password" aria-required="true">
                    <input type="hidden" name="setPass" id="setPass" value="true">
                    <input type="hidden" name="token" id="token" value="<?php echo $_GET['reset_code'] ?>">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $_GET['user_id'] ?>">
                    
                    <br>
                    <button type="submit" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                    <div style="display: none;" id="loading2"><img src="images/loading.gif"><a>Please wait...</a></div>
                    </form>
                  </div>
                </div>
              </div>




   <div class="modal fade" id="regSuccess" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Registration Successful!</h3>
                    <h4>Please check your inbox to verify your email.</h4>
                  </div>
                </div>
              </div>

     <div class="modal fade" id="userExists" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Username/Email Already taken!</h3>
                    <h4>Oops, looks like this username/email is not available.
                    <br>Please try another one.</h4>
                  </div>
                </div>
              </div>         

    <div class="modal fade" id="emailNotVerify" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Email Not verified!</h3>
                    <h4>Please check your inbox to verify your email.</h4>
                  </div>
                </div>
              </div>          

  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/ROSE/Rose(17.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">Login/Register</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Login/Register</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#login-tab" data-toggle="tab">Login</a></li>
              <li><a href="#register-tab" data-toggle="tab">Register</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active p-15" id="login-tab">
                <h4 class="text-gray mt-0 pt-5"> Login</h4>
                <hr>
                <form name="login-form" class="clearfix" method="post" action="">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="Username">Username/Email</label>
                      <input id="Username" name="Username" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="Password">Password</label>
                      <input id="Password" name="Password" class="form-control" type="password">
                    </div>
                  </div>
                  <div class="checkbox pull-left mt-15">
                    <label for="form_checkbox">
                      <input id="form_checkbox" name="form_checkbox" type="checkbox">
                      Remember me </label>
                  </div>
                  <div class="form-group pull-right mt-10">
                    <button type="submit" class="btn btn-dark btn-sm">Login</button>
                  </div>                  
                  <div class="clear text-center pt-10">
                    <a onclick="forgetPass()" class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
                  </div>
                  <div class="clear text-center pt-10">
                   <div class="row">
                   <div class="g-signin2" data-onsuccess="onSignIn"></div>
                  </div>
                  <div class="clearfix"><br/></div>
                  <div class="row">
                   <!--  <button class="btn btn-dark btn-lg no-border col-md-12" href="#" data-bg-color="#3b5998"><i class="fa fa-facebook"><span>&nbsp;</span></i>Login with facebook</button> -->
                 
                  </div>
                 
                  </div>
                </form>
              </div>
              <div class="tab-pane fade in p-15" id="register-tab">                
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                  </div>
                  <hr>
                  <p class="text-gray"></p>
                  <form id="reg-form" name="reg-form" method="post" action="javascript:return false">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form_name">Name</label>
                      <input id="form_name" name="form_name" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email Address</label>
                      <input id="form_email" name="form_email" class="form-control" type="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_choose_username">Choose Username</label>
                      <input id="form_choose_username" name="form_choose_username" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form_choose_password">Choose Password</label>
                      <input id="form_choose_password" name="form_choose_password" class="form-control" type="password">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Re-enter Password</label>
                      <input id="form_re_enter_password" name="form_re_enter_password"  class="form-control" type="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                  </div>
                  <input type="hidden" name="register" value="true">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
    <!-- Footer -->
    <footer id="footer" class="footer pb-0" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
      <div class="container pb-20">
        <div class="row multi-row-clearfix">
          <div class="col-sm-6 col-md-6">
            <div class="widget dark"> <img alt="" src="images/logo.png">
              <p class="font-12 mt-20 mb-10">Spreading awareness and changing lives, forms the core of Neikee. The idea is to awaken the spirit of kindness amongst each one of us and in the process, find good Samaritans & dedicated catalysts who team up as partners in driving this social change forward. On one hand, we are working tirelessly to create a web-based crowd-funding platform that supports these campaigns while on the other, our intent also aims at channelizing corporate CSR funds directly into projects that are close to the respective corporate’s vision of social development.</p>
              <ul class="styled-icons icon-dark mt-20">
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="https://www.facebook.com/neikeeindia" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="https://www.twitter.com/neikeeindia" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="https://www.linkedin.com/company-beta/17963039/" data-bg-color="#A11312"><i class="fa fa-linkedin"></i></a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Quick Contact</h5>
              <ul class="list-border">
                <li><a href="#">Mobile: +91 99101 77722</a></li>
                <li><a href="#">ankit@neikee.com</a></li>
                <li><a href="#" class="lineheight-20">DLF City Phase – I, Gurgaon, Haryana</a></li>
              </ul>
              <p class="text-white mb-5 mt-15">Subscribe to our newsletter</p>
              <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                <label class="display-block" for="mce-EMAIL"></label>
                <div class="input-group">
                  <input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                  </span>
                </div>
              </form>
              <!-- Mailchimp Subscription Form Validation-->
              <script type="text/javascript">
                $('#footer-mailchimp-subscription-form').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                  $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                    $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                    $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
                }
              </script>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-theme-colored p-20">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="text-white font-11 m-0">Copyright &copy;2017 Kodexlabs. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="js/custom.js"></script>

  <script> 
        // wait for the DOM to be loaded 
        $('#reset-form').submit(function() { 

          var loadGif = document.getElementById("loading");
            loadGif.style.display = "inline";

       var data = $('#reset-form').formSerialize();  
    // the data could now be submitted using $.get, $.post, $.ajax, etc 
    $.ajax({
    type: "POST",
    url: "php/resetPass.php",
    data: data,
    cache: false,
    success: function(result){
      loadGif.style.display = "none";
    alert(result);
    
    }
    });
    
        });  

    </script>

<script> 

		$('#setPass-form').submit(function() { 

        var pass1 = document.getElementById("newPass1").value;
      var pass2 = document.getElementById("newPass2").value;

      if(pass1 != pass2)
        alert("Password didn't match!");
      else if(pass1 == pass2){
        var loadGif = document.getElementById("loading2");
            loadGif.style.display = "inline";
            var data = $('#setPass-form').formSerialize();  
    // the data could now be submitted using $.get, $.post, $.ajax, etc 
    $.ajax({
    type: "POST",
    url: "php/resetPass.php",
    data: data,
    cache: false,
    success: function(result){
      loadGif.style.display = "none";
    alert(result);    
    
    }
    });
    }
        });  



        // wait for the DOM to be loaded 
        $('#reg-form').submit(function(e) { 

        var pass1 = document.getElementById("form_choose_password").value;
    	var pass2 = document.getElementById("form_re_enter_password").value;

    	if(pass1 == pass2){
    		    var data = $('#reg-form').formSerialize();   
		// the data could now be submitted using $.get, $.post, $.ajax, etc 		
		$.ajax({
		type: "POST",
		url: "php/register.php",
		data: data,
		cache: false,
		success: function(result){
		//alert(result);
    var data = $.trim(result);
    if(data=="This username/email already exists."){
      $('#userExists').modal('show');
    }
    else if(data=="User registered succesfully!"){
      $('#regSuccess').modal('show');
    }
    
		}
		});
		}
		else
    		alert("Password didn't match!");
        });  

    </script>     

   
    <script> 
       
      function forgetPass() {
        $('#resetPass').modal('show');

      } 

    <?php
    if($message!=NULL){
		echo 'alert("'.$message.'");';
    }    

    if(isset($_GET['reset_code'])){     
    echo "$('#setPass').modal('show');";
    }
 ?>

  </script>
  

</body>
</html>
