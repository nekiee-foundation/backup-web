<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/connect.php');
if(isset($_SESSION["Username"]) && isset($_SESSION["Password"])){
  $Username=$_SESSION["Username"];
  $result = $con->prepare("SELECT * FROM users WHERE user_id ='".$Username."' ");
  $result->execute();
  $row = $result->fetch();
}

$camp_list = $con->prepare("SELECT * FROM campaign");
$camp_list->execute();
//ga('set', 'userId', {{$Username}});
?><!DOCTYPE html>
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
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/manifest.json">
<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">

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
                      echo 'href="user_profile.php" > '.$row['name'];
                    }
                    else
                      echo 'href="login.php"> Login/Register';
                    ?>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
  </li></ul></nav></div></div></div>
</header>

<!-- Modal -->
<div class="modal fade" id="camp" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content p-30 pt-10">
      <h3 class="text-center text-theme-colored mb-20">Make a Donation</h3>
      <form action="donate/pay.php" method="POST" accept-charset="utf-8">
        <div class = "row">
          <select name="camp_id" id="camp_id" class="form-control">
            <?php                   
            for($i=0; $row2 = $camp_list->fetch(); $i++){
              ?>
              <option value ="0" camp_name="<?php echo $row2['camp_id'] ?>"><?php echo $row2['camp_desc'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_name">Amount <small>*</small></label>
                <input name="donation_amt" id="donation_amt" type="number" placeholder="Enter Amount" required="" class="form-control">
              </div>
            </div>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Donate</button>
          </div>
          <input type="hidden" name="camp_id" id="camp_id" value="930ee6d5f6db4375">
        </form>
      </div>
    </div>
  </div>


  <div class="modal fade" id="campRose" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content p-30 pt-10">
        <h3 class="text-center text-theme-colored mb-20">Donate to Rose</h3>
        <form action="donate/pay.php" method="POST" accept-charset="utf-8">
          <div class="row">
          <p>
            * 90% of all donations are transferred to the respective campaigns while 10% is retained by Neikee to cover administrative costs.
          </p>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_name">Amount <small>*</small></label>
                <input name="donation_amt" id="donation_amt" type="number" placeholder="Enter Amount" required="" class="form-control">
              </div>
            </div>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Add Now</button>
          </div>
          <input type="hidden" name="camp_id" id="camp_id" value="930ee6d5f6db4375">
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="camp2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content p-30 pt-10">
        <h3 class="text-center text-theme-colored mb-20">Donate to SAKHI</h3>
        <form action="donate/pay.php" method="POST" accept-charset="utf-8">
          <div class="row">
          <p>
            * 90% of all donations are transferred to the respective campaigns while 10% is retained by Neikee to cover administrative costs.
          </p>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_name">Amount <small>*</small></label>
                <input name="donation_amt" id="donation_amt" type="number" placeholder="Enter Amount" required="" class="form-control">
              </div>
            </div>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Add Now</button>
          </div>
          <input type="hidden" name="camp_id" id="camp_id" value="f0dcb8b65f2ed71d">
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="camp3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content p-30 pt-10">
        <h3 class="text-center text-theme-colored mb-20">Donate to Jamghat</h3>
        <form action="donate/pay.php" method="POST" accept-charset="utf-8">
          <div class="row">
          <p>
            * 90% of all donations are transferred to the respective campaigns while 10% is retained by Neikee to cover administrative costs.
          </p>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_name">Amount <small>*</small></label>
                <input name="donation_amt" id="donation_amt" type="number" placeholder="Enter Amount" required="" class="form-control">
              </div>
            </div>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Add Now</button>
          </div>
          <input type="hidden" name="camp_id" id="camp_id" value="1e12f725de1f5c1a">
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="camp4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content p-30 pt-10">
        <h3 class="text-center text-theme-colored mb-20">Donate to Sakar</h3>
        <form action="donate/pay.php" method="POST" accept-charset="utf-8">
          <div class="row">
          <p>
            * 90% of all donations are transferred to the respective campaigns while 10% is retained by Neikee to cover administrative costs.
          </p>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_name">Amount <small>*</small></label>
                <input name="donation_amt" id="donation_amt" type="number" placeholder="Enter Amount" required="" class="form-control">
              </div>
            </div>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Add Now</button>
          </div>
          <input type="hidden" name="camp_id" id="camp_id" value="d2fd1e8983d80bfd">
        </form>
      </div>
    </div>
  </div>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/Jamghat/Jamghat(5).jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/HVI/HVI(4).JPG"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption BigBold-Title tp-resizeme rs-parallaxlevel-0 text-uppercase"
                id="rs-1-layer-1"

                data-x="['left','left','left','left']" 
                data-hoffset="['50','50','30','17']" 
                data-y="['bottom','bottom','bottom','bottom']" 
                data-voffset="['110','110','180','160']" 
                data-fontsize="['105','100','70','60']"
                data-lineheight="['100','90','60','60']"
                data-width="['none','none','none','400']"
                data-height="none"
                data-whitespace="['nowrap','nowrap','nowrap','normal']"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];" 
                data-mask_out="x:inherit;y:inherit;" 
                data-start="500" 
                data-splitin="none" 
                data-splitout="none" 
                data-basealign="slide" 
                data-responsive_offset="on"
                style="z-index: 6; white-space: nowrap;">Inspiring<span class="text-theme-colored">Kindness</span>
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption BigBold-SubTitle tp-resizeme rs-parallaxlevel-0"
              id="rs-1-layer-2"

              data-x="['left','left','left','left']" 
              data-hoffset="['55','55','33','20']" 
              data-y="['bottom','bottom','bottom','bottom']" 
              data-voffset="['40','1','74','58']" 
              data-fontsize="['15','15','15','13']"
              data-lineheight="['24','24','24','20']"
              data-width="['410','410','410','280']"
              data-height="['60','100','100','100']"
              data-whitespace="normal"
              data-transform_idle="o:1;"
              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
              data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
              data-start="650" 
              data-splitin="none" 
              data-splitout="none" 
              data-basealign="slide" 
              data-responsive_offset="on"
              style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">For us it’s literal meaning of an act of kindness is the motto that we live by everyday.
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption btn btn-default btn-transparent btn-flat btn-lg pl-40 pr-40 rs-parallaxlevel-0"

            id="rs-1-layer-3"
            data-x="['left','left','left','left']" 
            data-hoffset="['470','480','30','20']" 
            data-y="['bottom','bottom','bottom','bottom']" 
            data-voffset="['50','50','30','20']" 
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
            data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-start="650" 
            data-splitin="none" 
            data-splitout="none" 
            data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
            data-basealign="slide" 
            data-responsive_offset="on"
            style="z-index: 8; white-space: nowrap;background-color:#ec2e90;outline:none;box-shadow:none;">DONATE NOW 
          </div>
        </li>

        <!-- SLIDE 2 -->
        <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/hvi1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
          <!-- MAIN IMAGE -->
          <img src="images/hvi1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
          <!-- LAYERS -->

          <!-- LAYER NR. 1 -->
          <div class="tp-caption BigBold-Title tp-resizeme rs-parallaxlevel-0 text-uppercase"
          id="rs-2-layer-1"

          data-x="['left','left','left','left']" 
          data-hoffset="['50','50','30','17']" 
          data-y="['bottom','bottom','bottom','bottom']" 
          data-voffset="['110','110','180','160']" 
          data-fontsize="['78']"
          data-lineheight="['60']"
          data-width="['none','none','none','400']"
          data-height="none"
          data-whitespace="['nowrap','nowrap','nowrap','normal']"
          data-transform_idle="o:1;"
          data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_in="x:0px;y:[100%];" 
          data-mask_out="x:inherit;y:inherit;" 
          data-start="500" 
          data-splitin="none" 
          data-splitout="none" 
          data-basealign="slide" 
          data-responsive_offset="on"
          style="z-index: 6; white-space: nowrap;"><span class="text-theme-colored">SAVE</span> THE CHILD
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption BigBold-SubTitle tp-resizeme rs-parallaxlevel-0"
        id="rs-2-layer-2"

        data-x="['left','left','left','left']" 
        data-hoffset="['55','55','33','20']" 
        data-y="['bottom','bottom','bottom','bottom']" 
        data-voffset="['40','1','74','58']" 
        data-fontsize="['15','15','15','13']"
        data-lineheight="['24','24','24','20']"
        data-width="['410','410','410','280']"
        data-height="['60','100','100','100']"
        data-whitespace="normal"
        data-transform_idle="o:1;"
        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-start="650" 
        data-splitin="none" 
        data-splitout="none" 
        data-basealign="slide" 
        data-responsive_offset="on"
        style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">Inspiring Kindness Through Neikee & Simplifying The Act Of Social Good
      </div>

      <!-- LAYER NR. 3 -->
      <div class="tp-caption btn btn-default btn-transparent btn-flat btn-lg pl-40 pr-40 rs-parallaxlevel-0"

      id="rs-2-layer-3"
      data-x="['left','left','left','left']" 
      data-hoffset="['470','480','30','20']" 
      data-y="['bottom','bottom','bottom','bottom']" 
      data-voffset="['50','50','30','20']" 
      data-width="none"
      data-height="none"
      data-whitespace="nowrap"
      data-transform_idle="o:1;"
      data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
      data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
      data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
      data-start="650" 
      data-splitin="none" 
      data-splitout="none" 
      data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
      data-basealign="slide" 
      data-responsive_offset="on"
      style="z-index: 8; white-space: nowrap;background-color:#ec2e90;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">DONATE NOW 
    </div>
  </li>

  <!-- SLIDE 3 -->
  <li data-index="rs-3" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/HVI/HVI(11).JPG"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
    <!-- MAIN IMAGE -->
    <img src="images/Jamghat/Jamghat(24).JPG"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption BigBold-Title tp-resizeme rs-parallaxlevel-0"
    id="rs-3-layer-1"

    data-x="['left','left','left','left']" 
    data-hoffset="['50','50','30','17']" 
    data-y="['bottom','bottom','bottom','bottom']" 
    data-voffset="['110','110','180','160']" 
    data-fontsize="['110','100','70','60']"
    data-lineheight="['100','90','60','60']"
    data-width="['none','none','none','400']"
    data-height="none"
    data-whitespace="['nowrap','nowrap','nowrap','normal']"
    data-transform_idle="o:1;"
    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
    data-mask_in="x:0px;y:[100%];" 
    data-mask_out="x:inherit;y:inherit;" 
    data-start="500" 
    data-splitin="none" 
    data-splitout="none" 
    data-basealign="slide" 
    data-responsive_offset="on"
    style="z-index: 6; white-space: nowrap;"><span class="text-theme-colored">DONATE</span>
  </div>

  <!-- LAYER NR. 2 -->
  <div class="tp-caption BigBold-SubTitle tp-resizeme rs-parallaxlevel-0"
  id="rs-3-layer-2"

  data-x="['left','left','left','left']" 
  data-hoffset="['55','55','33','20']" 
  data-y="['bottom','bottom','bottom','bottom']" 
  data-voffset="['40','1','74','58']" 
  data-fontsize="['15','15','15','13']"
  data-lineheight="['24','24','24','20']"
  data-width="['410','410','410','280']"
  data-height="['60','100','100','100']"
  data-whitespace="normal"
  data-transform_idle="o:1;"
  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
  data-start="650" 
  data-splitin="none" 
  data-splitout="none" 
  data-basealign="slide" 
  data-responsive_offset="on"
  style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;"> 
</div>

<!-- LAYER NR. 3 -->
<div class="tp-caption btn btn-default btn-transparent btn-flat btn-lg pl-40 pr-40 rs-parallaxlevel-0"

id="rs-3-layer-3"
data-x="['left','left','left','left']" 
data-hoffset="['470','480','30','20']" 
data-y="['bottom','bottom','bottom','bottom']" 
data-voffset="['50','50','30','20']" 
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;"
data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-start="650" 
data-splitin="none" 
data-splitout="none" 
data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
data-basealign="slide" 
data-responsive_offset="on"
style="z-index: 8; white-space: nowrap;background-color:#ec2e90;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">DONATE NOW 
</div>
</li>
</ul>
</div><!-- end .rev_slider -->
</div>
<!-- end .rev_slider_wrapper -->
<script>
  $(document).ready(function(e) {
    $(".rev_slider").revolution({
      sliderType:"standard",
      sliderLayout: "auto",
      dottedOverlay: "none",
      delay: 5000,
      navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        onHoverStop: "off",
        touch: {
          touchenabled: "on",
          swipe_threshold: 75,
          swipe_min_touches: 1,
          swipe_direction: "horizontal",
          drag_block_vertical: false
        },
        arrows: {
          style: "gyges",
          enable: true,
          hide_onmobile: false,
          hide_onleave: true,
          hide_delay: 200,
          hide_delay_mobile: 1200,
          tmp: '',
          left: {
            h_align: "left",
            v_align: "center",
            h_offset: 0,
            v_offset: 0
          },
          right: {
            h_align: "right",
            v_align: "center",
            h_offset: 0,
            v_offset: 0
          }
        },
        bullets: {
          enable:true,
          hide_onmobile:true,
          hide_under:960,
          style:"zeus",
          hide_onleave:false,
          direction:"horizontal",
          h_align:"right",
          v_align:"bottom",
          h_offset:80,
          v_offset:50,
          space:5,
          tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title">{{title}}</span>'
        }
      },
      responsiveLevels: [1240, 1024, 778, 480],
      visibilityLevels: [1240, 1024, 778, 480],
      gridwidth: [1170, 1024, 778, 480],
      gridheight: [550, 768, 960, 720],
      lazyType: "none",
      parallax: {
        origo: "slidercenter",
        speed: 1000,
        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
        type: "scroll"
      },
      shadow: 0,
      spinner: "off",
      stopLoop: "on",
      stopAfterLoops: 0,
      stopAtSlide: -1,
      shuffle: "off",
      autoHeight: "off",
      fullScreenAutoWidth: "off",
      fullScreenAlignForce: "off",
      fullScreenOffsetContainer: "",
      fullScreenOffset: "0",
      hideThumbsOnMobile: "off",
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      debugMode: false,
      fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false,
      }
    });
  });
</script>
<!-- Slider Revolution Ends -->

</div>
</section>

<!-- Section: featured project 
<section class="bg-lightest">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 wow fadeInLeft animation-delay6">
        <h4 class="text-uppercase line-bottom mt-0">Featured Project</h4>
        <div class="featured-project-carousel owl-nav-top">
          <div class="item">
            <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="images/Rose/ROSE(2).jpg">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="0"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Rural Organization for Social Empowerment (ROSE):</strong></span>  Technical education is already transforming millions of lives and fuelling economic growth
        across all sectors India.Introduce, inculcate and promote a spirit of education by working towards inclusive computer literacy is its main focus.</p>
                <div class="donate-details">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                 <ul class="pull-right list-inline mt-15">
                   <li>Raised: &#8377; 0</li>
                   <li>Goal: &#8377; 9,40,000 annually</li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
         <div class="item">
          <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
            <div class="thumb">
              <img class="img-fullwidth" alt="" src="images/Jamghat/Jamghat(1).jpg">
            </div>
            <div class="progress-item mt-0">
              <div class="progress mb-0">
                <div class="progress-bar" data-percent="0"></div>
              </div>
            </div>
            <div class="causes-details clearfix border-bottom p-15 pt-10">
              <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Jamghat (a lively gathering):</strong></span>To provide an environment where street children can evolve as physically and emotionally healthy, self-dependent individuals, living a life of their choice. To use street and stage theatre to nurture self confidence in the children and build awareness in society on key social issues related to street children.</p>
              <div class="donate-details">
               <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
               <ul class="pull-right list-inline mt-15">
                 <li>Raised: &#8377; 0</li>
                 <li>Goal: &#8377; 5,70,000</li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="item">
        <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
          <div class="thumb">
            <img class="img-fullwidth" alt="" src="images/Sakhi/Sakhi(13).jpg">
          </div>
          <div class="progress-item mt-0">
            <div class="progress mb-0">
              <div class="progress-bar" data-percent="0"></div>
            </div>
          </div>
          <div class="causes-details clearfix border-bottom p-15 pt-10">
            <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>SAKHI For Girls Education:</strong></span> To create safe and quality learning space where slum based girls will able to come together for building their basic educational capacities and life skills, so every girl will able to continue her school confidently with quality learning.</p>
            <div class="donate-details">
             <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
             <ul class="pull-right list-inline mt-15">
               <li>Raised: &#8377; 0</li>
               <li>Goal: &#8377; 3,90,000</li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
<div class="col-sm-12 col-md-4 wow fadeInRight animation-delay6">
  <h4 class="text-uppercase line-bottom mt-0">Other Campaings</h4>
  <div class="bxslider bx-nav-top">
    <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
      <div class="row">
        Coming Soon
      </div>
    </div>

  </div>
</div>
</section-->
<!-- <section id="about-us">
  <div class="container pt-70">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3 class="text-uppercase mt-0">Who we are !</h3>
          <div class="title-icon">
            <i class="flaticon-charity-hand-holding-a-heart"></i>
          </div>
          <p>A little about us !</p>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <img src="images/logo.png"></a>
                <div class="media-body">
                <p>
                  <strong>Neikee, aspires to be an enterprise that drive social change</strong><br>For us it’s literal meaning of an act of kindness is the motto that we live by everyday <b>Innovative campaigns</b> aimed at addressing,engaging and finding solutions for issues plaguing humanity
                  </p>
                  <p>
                  <strong>Spreading awareness and changing lives, forms the core of Neikee.</strong>
                   <br>The idea is to awaken the spirit of kindness amongst each one of us <b>Find good Samaritans</b> and dedicated catalysts who team up as partners in driving this social change forward.</p>
                   <strong>The Impact</strong>
                   <br>Imagine how beautiful the world would seem if the economic gap between the rich and poor is reduced and the basic sustenance needs of the under-privilege are met.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section> -->
<!-- Section: Causes -->
<section> 
  <div class="container pb-80">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3 class="text-uppercase mt-0">Our Causes</h3>
          <div class="title-icon">
            <i class="flaticon-charity-hand-holding-a-heart"></i>
          </div>
          <p>The idea is to awaken the spirit of kindness <br>amongst each one of us</p>
        </div>
      </div>
    </div>
    <div class="row mtli-row-clearfix">
      <!-- <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
          <div class="thumb">
            <img class="img-fullwidth" alt="" src="images/HVI/HVI(10).JPG">
          </div>
          <div class="progress-item mt-0">
            <div class="progress mb-0">
              <div class="progress-bar" data-percent="0"></div>
            </div>  
          </div>
          <div class="causes-details clearfix border-bottom p-15 pt-10">
            <h5><a href="#">Sponsor a camp by KNVB (Royal Dutch Football Association)</a></h5>
            <p>One week camp where around 200 physical education teachers are trained by international coaches</p>
            <ul class="list-inline clearfix mt-20">
              <li class="pull-left pr-0">Raised:&#8377; 0</li>
              <li class="text-theme-colored pull-right pr-0">Goal: &#8377; 4,00,000</li>
            </ul>
            <div class="mt-10">
            <form action="donate/pay.php" method="POST" accept-charset="utf-8">
              <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" data-toggle="modal" data-target="campRose" href="#">Donate</a>
            </form>
             <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 0 Donors</div>
           </div>
         </div>
       </div>
     </div> -->
     <div class="col-sm-6 col-md-3 col-lg-3">
     <?php 
            
            $donors = 0;
            $camp_donors = $con->prepare("SELECT COUNT(*) AS total_donors FROM transactions WHERE status='COMPLETED' && camp_id = '1e12f725de1f5c1a'");
            $camp_donors->execute();
            $row2=$camp_donors->fetch();
            $donors = $row2['total_donors'];

            $amount_raised = 0;
            $camp_transaction = $con->prepare("SELECT SUM(trans_amt) AS total_amount_raise FROM transactions WHERE status='COMPLETED' && camp_id = '1e12f725de1f5c1a' LIMIT 1");
            $camp_transaction->execute();
            $row = $camp_transaction->fetch();
            if ($row['total_amount_raise']==0) {
              $amount_raised = 0;
              $per = 0;
            }
            else{  
              $amount_raised = $row['total_amount_raise'];
              $per = round(100*($amount_raised)/627000);
            }
      ?>
      <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
        <div class="thumb">
          <img class="img-fullwidth" alt="" src="images/Jamghat/Jamghat(2).jpg">
        </div>
        <div class="progress-item mt-0">
          <div class="progress mb-0">
            <div class="progress-bar" data-percent="<?php echo $per;?>"></div>
          </div>
        </div>
        <div class="causes-details clearfix border-bottom p-15 pt-10">
          <h5><a href="#">Children Don't Belong on the Streets</a></h5>
          <p>Children don’t belong on the streets and that’s exactly what Jamghat has done for a bunch of street kids; taken them out of the dangerous streets and provided them a comfortable home environment where they can evolve as physically and emotionally healthy, self-dependent individuals, living a life of their choice.<br><br><br><br><a href="Jamghat/campaign_desktop.php" target="blank"><b>Know More</b></a></p>
          <ul class="list-inline clearfix mt-20">
            <li class="pull-left pr-0">Raised: &#8377;<?php echo $amount_raised;?>
            </li>
            <li class="text-theme-colored pull-right pr-0">Goal: &#8377; 6,27,000</li>
          </ul>
          <div class="mt-10">
           <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" data-toggle="modal" data-target="#camp3" href="#">Donate</a> &nbsp;
           <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> <?php echo $donors;?> Donors</div>
         </div>
       </div>
     </div>
   </div>
   <div class="col-sm-6 col-md-3 col-lg-3">
        <?php 
            $donors = 0;
            $camp_donors = $con->prepare("SELECT COUNT(*) AS total_donors FROM transactions WHERE status='COMPLETED' && camp_id = 'f0dcb8b65f2ed71d'");
            $camp_donors->execute();
            $row2=$camp_donors->fetch();
            $donors = $row2['total_donors'];
            $camp_transaction = $con->prepare("SELECT SUM(trans_amt) AS total_amount_raise FROM `transactions` WHERE status='COMPLETED' && camp_id = 'f0dcb8b65f2ed71d' LIMIT 1");
            $camp_transaction->execute();
            $row = $camp_transaction->fetch();
            if ($row['total_amount_raise']==0) {
              $amount_raised = 0;
              $per = 0;
            }
            else{  
              $amount_raised = $row['total_amount_raise'];
              $per = round(100*(($amount_raised)/528000));
            }
      ?>
    <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
      <div class="thumb">
        <img class="img-fullwidth" alt="" src="images/placeholder4.jpg">
      </div>
      <div class="progress-item mt-0">
        <div class="progress mb-0">
          <div class="progress-bar" data-percent="<?php echo $per;?>"></div>
        </div>
      </div>
      <div class="causes-details clearfix border-bottom p-15 pt-10">
        <h5><a href="#">Girls Learning Centre</a></h5>
        <p>Girls living in slums do not always have the option of continuing their education due factors like not having adequate literacy and writing skills which leads to them to drop out of secondary education or parents giving more importance to a boy’s educational needs over the girl child. Help these girls gain the required academic support through an after-school program.</p><a href="Sakhi/campaign_desktop.php"target="blank"><b>Know More</b></a>
        <ul class="list-inline clearfix mt-20">
          <li class="pull-left pr-0">Raised: &#8377;<?php echo $amount_raised;?></li>
          <li class="text-theme-colored pull-right pr-0">Goal: &#8377; 5,28,000</li>
        </ul>
        <div class="mt-10">
         <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" data-toggle="modal" data-target="#camp2" href="#">Donate</a>&nbsp;
        <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> <?php echo $donors;?> Donors</div>
       </div>
     </div>
   </div>
 </div>

   <div class="col-sm-6 col-md-3 col-lg-3">
           <?php 
            $donors = 0;
            $camp_donors = $con->prepare("SELECT COUNT(*) AS total_donors FROM transactions WHERE status='COMPLETED' && camp_id = '930ee6d5f6db4375'");
            $camp_donors->execute();
            $row2=$camp_donors->fetch();
            $donors = $row2['total_donors'];

            $amount_raised = 0;
            $camp_transaction = $con->prepare("SELECT SUM(trans_amt) AS total_amount_raise FROM `transactions` WHERE status='COMPLETED' && camp_id = '930ee6d5f6db4375' LIMIT 1");
            $camp_transaction->execute();
            $row = $camp_transaction->fetch();
            if ($row['total_amount_raise']==0) {
              $amount_raised = 0;
              $per = 0;
            }
            else{  
              $amount_raised = $row['total_amount_raise'];
              $per = round(100*($amount_raised)/1034000);
            }
      ?>
    <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
      <div class="thumb">
        <img class="img-fullwidth" alt="" src="images/Rose/ROSE(1).jpg">
      </div>
      <div class="progress-item mt-0">
        <div class="progress mb-0">
          <div class="progress-bar" data-percent="<?php echo $per;?>"></div>
        </div>
      </div>
      <div class="causes-details clearfix border-bottom p-15 pt-10">
        <h5><a href="#">Next IT Whiz Kid from Rural India</a></h5>
        <p>Technical education is transforming millions of lives and fuelling economic growth across the country but why should the lack of such facilities in rural/ semi-urban India be a hindrance for a kid from those sectors to become the next IT whiz kid? Help ROSE Computer Academy take basic computer training courses to villages across Haryana.<br><br><br><a href="Rose/campaign_desktop.php"target="blank"><b>Know More</b></a></p>
        <ul class="list-inline clearfix mt-20">
          <li class="pull-left pr-0">Raised: &#8377;<?php echo $amount_raised;?></li>
          <li class="text-theme-colored pull-right pr-0">Goal: &#8377; 10,34,000</li>
        </ul>
        <div class="mt-10">
         <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" data-toggle="modal" data-target="#campRose" href="#">Donate</a>&nbsp;
          <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> <?php echo $donors;?> Donors</div> 
       </div>
     </div>
   </div>
 </div>


 <div class="col-sm-6 col-md-3 col-lg-3">
            <?php 
            $donors = 0;
            $camp_donors = $con->prepare("SELECT COUNT(*) AS total_donors FROM transactions WHERE status='COMPLETED' && camp_id = 'd2fd1e8983d80bfd'");
            $camp_donors->execute();
            $row2=$camp_donors->fetch();
            $donors = $row2['total_donors'];


            $amount_raised = 0;
            $camp_transaction = $con->prepare("SELECT SUM(trans_amt) AS total_amount_raise FROM `transactions` WHERE status='COMPLETED' && camp_id = 'd2fd1e8983d80bfd' LIMIT 1");
            $camp_transaction->execute();
            $row = $camp_transaction->fetch();
            if ($row['total_amount_raise']==0) {
              $amount_raised = 0;
              $per = 0;
            }
            else{  
              $amount_raised = $row['total_amount_raise'];
              $per = round(100*($amount_raised)/332200);
            }
      ?>
  <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
    <div class="thumb">
      <img class="img-fullwidth" alt="" src="images/HVI/HVI(50).JPG">
    </div>
    <div class="progress-item mt-0">
      <div class="progress mb-0">
        <div class="progress-bar" data-percent="<?php echo $per;?>"></div>
      </div>
    </div>
    <div class="causes-details clearfix border-bottom p-15 pt-10">
      <h5><a href="#">Breaking Gender Barriers</a></h5>
      <p>Gender discrimination is rampant in our society and more so in the villages. Sakar uses sports as a medium to break gender barriers and create opportunities for girls to participate in sports. Challenging gender stereotype and increasing mobility of girls to help them establish their identity.<br><br><br><br><a href="Sakar/campaign_desktop.php"target="blank"><b>Know More</b></a></p>
      <ul class="list-inline clearfix mt-20">
        <li class="pull-left pr-0">Raised: &#8377;<?php echo $amount_raised;?></li>
        <li class="text-theme-colored pull-right pr-0">Goal: &#8377; 3,32,200</li>
      </ul>
      <div class="mt-10">
       <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" data-toggle="modal" data-target="#camp4" href="#">Donate</a>&nbsp;
         <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> <?php echo $donors;?> Donors</div>  
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>

<!-- divider: Donate Now -->
<section id="donate-now" class="divider"  data-bg-img="images/bg.JPG">
  <div class="container pt-0 pb-0">
    <div class="row">
      <div class="col-md-7">
        <div class="bg-light-transparent p-40">
          <h4 class="text-uppercase line-bottom">Make a Donation Now!</h4>
          <div class="row">
            <p>We want to make it a <b><big>simple</b></big> and <b><big>transparent</b></big> for you to donate to causes close to your heart. Keeping you <b><big>well informed</b></big> on how your donation is being used is very important for us and we will keep you posted on it on a regular basis.
            <hr />
              We work towards finding campaigns from small NGOs working on the ground who need <b><big>your support to create a larger impact.</b></big>
            </p>
            <div class="col-sm-12">
              <div class="form-group mb-20">
                <a class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-toggle="modal" data-target="#camp" href="#" ">Donate Now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
</div>
<section id="contact">
  <div class="container pt-70">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3 class="text-uppercase mt-0">Contact Us</h3>
          <div class="title-icon">
            <i class="flaticon-charity-hand-holding-a-heart"></i>
          </div>
          <p>Wish to know more? Ping us!</p>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                  <p>Neikee Foundation<br>
                    DLF City Phase – I,<br> Gurgaon, Haryana</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                    <p>
                      ankit@neikee.com <br><br><br>
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
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
  <script src="js/custom.js"></script>  

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100887494-1', 'auto');
  ga('send', 'pageview');
  ga('set', 'userId', {{<?php echo $Username;?>}}); // 
</script>
    </body>
    </html>