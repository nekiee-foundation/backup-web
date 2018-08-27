
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>



<title>Neikee - An act of kindness</title>

<!-- Favicon and Touch Icons -->
<link href="../../images/favicon.png" rel="shortcut icon" type="image/png">
  <link href="../../images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="../../images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="../../images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="../images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

  <!-- Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="../css/animate.css" rel="stylesheet" type="text/css">
  <link href="../css/css-plugin-collections.css" rel="stylesheet"/>
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="../css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
  <!-- CSS | Main style file -->
  <link href="../css/style-main.css" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="../css/preloader.css" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="../css/responsive.css" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

  <!-- Revolution Slider 5.x CSS settings -->
  <link  href="../js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
  <link  href="../js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
  <link  href="../js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

  <!-- CSS | Theme Color -->
  <link href="../css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="../js/jquery-2.2.0.min.js"></script>
  <script src="../js/jquery-ui.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="../js/jquery-plugin-collection.js"></script>

  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="../js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="../js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
<header class="header">
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
          <div class="container">
            <nav id="menuzord" class="menuzord orange bg-light pull-left">
              <div class="pull-left" style="padding-right:1.2em !important; padding-top: 1em !important;">
                <img src="../images/logo.png" alt="">
              </div>
              <ul class="menuzord-menu" style="margin-left:2em; float:right !important;">
                <li class="active"><a href="#home">Home</a>
                <li><a href="https://neikee.com/about.php">About Us</a>
                  <li><a href="#">Campaigns<span class="label label-warning"></span></a>
                    <ul class="dropdown">
                     <!-- <li><a href="Sakhi/campaign_desktop.php">Hockey Village India</a></li> -->
                     <li><a href="Sakhi/campaign_desktop.php" target="blank">Girls Learning Centre</a></li>
                     <li><a href="https://neikee.com/Jamghat/campaign_desktop.php" target="blank">Children Don't Belong on the Streets</a></li>
                     <li><a href="https://neikee.com/Rose/campaign_desktop.php" target="blank">Next IT Whiz Kid from Rural India</a></li>
                     <li><a href="https://neikee.com/Sakar/campaign_desktop.php" target="blank">Breaking Gender Barriers</a></li>
                   </ul>
                 </li>
                 <li><a href="https://neikee.com/contact.php">Contact Us</a></li>
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
  
   <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider">
          <div class="container-fluid p-0">

            <!-- Slider Revolution Start -->
            <div class="rev_slider_wrapper">
              <div class="rev_slider" data-version="5.0">
                <ul>
                  <!-- SLIDE 1 -->
                  <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="../images/Rose/ROSE(12).jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="../images/Rose/ROSE(12).jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
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
                    style="z-index: 6; white-space: nowrap;">BE A PART OF <span class="text-theme-colored">US!</span>
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
                  style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">Our project would not be so successfull without our supporters! At Neikee all donations reach their target directly and in full amount! 
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
                style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">DONATE NOW 
              </div>
            </li>

            <!-- SLIDE 2 -->
            <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="../images/Rose/ROSE(14).jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
              <!-- MAIN IMAGE -->
              <img src="../images/Rose/ROSE(14).jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
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
              style="z-index: 6; white-space: nowrap;"><span class="text-theme-colored">DONATE</span> US
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
            style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">Our project would not be so successfull without our supporters! At Hockey Village India all donations reach their target directly and in full amount!
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
          style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">DONATE NOW 
        </div>
      </li>

      <!-- SLIDE 3 -->
      <li data-index="rs-3" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="../images/Rose/ROSE(15).jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
        <!-- MAIN IMAGE -->
        <img src="..images/Rose/ROSE(15.jpg)"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
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
        style="z-index: 6; white-space: nowrap;"><span class="text-theme-colored">DONATE</span> NOW
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
      style="z-index: 7; min-width: 410px; max-width: 410px; max-width: 60px; max-width: 60px; white-space: normal;">Our project would not be so successfull without our supporters! At Neikee all donations reach their target directly and in full amount!
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
    style="z-index: 8; white-space: nowrap;border-color:rgba(255, 255, 255, 0.25);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">DONATE NOW 
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
      gridheight: [700, 768, 960, 720],
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

<!-- Section: featured project -->
<section id="features" class="bg-lightest">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 ">
        <h4 class="text-uppercase line-bottom mt-0">About Campaign</h4>
        <div class="featured-project">
          <div class="item">
            <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <p class="mb-5 mt-5"><span class="text-theme-colored">
                  Amit, differently abled himself, dreams of equipping at least one member of every household in rural/ semi-urban Haryana with basic computer literacy skills to address the digital divide between the urban and rural masses of the country. <br></span>
          Rural Organization for Social Empowerment (ROSE), run by villagers, provides computer skills and life skills to rural and semi-urban populations to enable them to find employment, access better opportunities and become self-aware individuals, thereby contributing to more inclusive society. <br>
          Computer education opens immeasurably valuable livelihoods, self-development and other opportunities for around 200 students that are trained every year by them.
                </p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  
</div>
</section>

<!-- divider: Donate Now -->
<section id="donate-now" class="divider"  data-bg-img="../images/bg_rose.JPG">
  <div class="container pt-0 pb-0">
    <div class="row">
      <div class="col-md-7">
        <div class="bg-light-transparent p-40">
          <h4 class="text-uppercase line-bottom">Make a Donation Now!</h4>
            <div class="row">
                <p> ROSE’s current faculty are students who have graduated from the academy and are now working as teachers for the other students however this is not the best approach to follow, especially when the need is to grow. ROSE has been trying to <b><big>hire three additional resources</b></big> for the last year or so but has not been able to do so as it is finding it <b>difficult to absorb the cost of salaries</b> for new staff members.<hr />
          Come let’s support the salary cost for 3 additional resources; 1 good teacher who helps train village level entrepreneurs so that they can open their own enterprises in their own villages and 2 mobilization resources who will help reaching out to more and more students.
        </p>
        <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait..." data-toggle="modal" data-target="#campRose">Donate</button>
                      <!--<div class="col-sm-12">
                          <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now Using Instamojo</button>
                          
                        </div>
                        <div class="modal fade" id="bankDetails" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Bank Transfer Details</h3>
                    <form id="job_apply_form" name="job_apply_form" action="includes/job.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-sm-12">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                          </div>
                     
                      </div>
                      
                      <div class="form-group">
                        <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Update Details</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
                    </div>-->

            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: Gallery -->
    <section id="gallery" class="divider bg-lighter">
      <div class="container-fluid">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Gallery</h3>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>ONE PICTURE SAYS MORE THAN 1000 WORDS...</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="gallery-isotope grid-5 gutter-small clearfix" data-lightbox="gallery">
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="../images/Rose/ROSE(3).jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="../images/Rose/ROSE(3).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="../images/Rose/ROSE(4).jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="../images/Rose/ROSE(4).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="../images/Rose/ROSE(1).jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="../images/Rose/ROSE(1).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="../images/Rose/ROSE(16).jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="../images/Rose/ROSE(16).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="../images/Rose/ROSE(13).jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="../images/Rose/ROSE(13).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                             </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    

      

      <!-- Section: Contact -->
            <section id="contact">
      <div class="container pt-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Know More</h3>
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
                    <div class="media-body"> <strong>ABOUT THE NGO PARTNER</strong>
                      <p><br>Rural Organization for Social Change (ROSE) Computer Academy, <br>
                        Contact Person: Amit Kataria, Founder & Director<br>
                        Location: Palam Vihar, Gurgaon<br>
                        Haryana<br><br>
                        </p>
                    </div>
                  </div>
                </div>
                <!--<div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                    <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                      <p><br>Phone: +91-8290929002<br>
                      <br>
                        Contact: Andrea Thumshirn

                        </p>
                    </div>
                  </div>
                </div>-->
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                    <div class="media-body"> <strong>DETAILED INFORMATION ABOUT THE CAMPAIGN</strong>
                      <p>Connect with us at ankit@neikee.com for more information or download a detailed PDF about the campaign and how the funds would be utilized by clicking the button. 
                      <a style="padding: 10px;" target="_blank" type="submit" href= "../documents/Campaign Details_Rose.pdf" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Campaign Details - Next Whiz Kid from Rural India</a></p>
                    </div>
                  </div>
                </div>
                <!--<div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="fa fa-credit-card text-theme-colored"></i></a>
                    <div class="media-body"> <strong>ACCOUNT DETAILS</strong>
                      <p>Account:
                          669002100001180<br>
                          IFSC: PUNB0669000<br>
                          branch code 6690, bank code 024<br>
                          Punjab National Bank Mahua</p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
            
          </div>
        </div>
      </div>-->
    </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
      <footer id="footer" class="footer pb-0" data-bg-img="../images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pb-20">
      <div class="row multi-row-clearfix">
        <div class="col-sm-6 col-md-6">
          <div class="widget dark"> <img alt="" src="../images/logo.png">
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
  <div class="modal fade" id="campRose" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content p-30 pt-10">
      <h3 class="text-center text-theme-colored mb-20">Donate to Rose Foundation - Next Whiz Kid from Rural India</h3>
      <form action="../donate/pay.php" method="POST" accept-charset="utf-8">
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
          <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Donate</button>
        </div>
        <input type="hidden" name="camp_id" id="camp_id" value="930ee6d5f6db4375">
      </form>
    </div>
  </div>
</div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="../js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


    </body>
    </html>