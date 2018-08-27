<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('../php/connect.php');
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
	header('Location: https://neikee.com/Sakhi/campaign_mobile.php');
$donors = 0;
            $camp_donors = $con->prepare("SELECT COUNT(*) AS total_donors FROM transactions WHERE status='COMPLETED' && camp_id = 'f0dcb8b65f2ed71d'");
            $camp_donors->execute();
            $row2=$camp_donors->fetch();
            $donors = $row2['total_donors'];


            $amount_raised = 0;
            $camp_transaction = $con->prepare("SELECT SUM(trans_amt) AS total_amount_raise FROM `transactions` WHERE status='COMPLETED' && camp_id = 'f0dcb8b65f2ed71d' LIMIT 1");
            $camp_transaction->execute();
            $row = $camp_transaction->fetch();
            if ($row['total_amount_raise']==0) {
              $amount_raised = 0;
              $per = 0;
            }
            else{  
              $amount_raised = $row['total_amount_raise'];
              $per = 0.01*(528000 - $amount_raised)/528000;
            }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

	<!-- Meta Tags -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Neikee" />
	<meta name="keywords" content="funding,Crowdfunding,NGO,social,social cause,Neikee" />
	<meta name="author" content="Kodexlabs" />
	<title>Neikee - An act of kindness</title>
	<!-- Page Title -->

	<link href="../images/favicon.png" rel="shortcut icon" type="image/png">
	<link href="../images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="../images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="../images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

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
<body class="vertical-nav">
	<div id="wrapper">
		<!-- preloader -->


		<!-- Header -->
		<header id="header" class="header layer-overlay overlay-dark">
			<div class="header-nav-wrapper-nav">
				<div class="header-nav-wrapper">
					<div class="container-fluid p-0">
						<div id="menuzord-verticalnav" class="menuzord">
							<a class="menuzord-brand p-30" href="javascript:void(0)"><img width="auto" height="100" alt="logo" src="http://www.mumbaiindians.com/wp-content/themes/mumbai-indians/images/efa/Sakhi-logo.png"></a>
							<div>
								<div class="item">
									<div class="causes bg-darker box-hover-effect effect1 sm-maxwidth500">
										<div class="causes-details border-bottom">
											<p class=""><span class="text-uppercase text-theme-colored"><strong>Girls Learning Centre</strong></span><br>
												Girls living in slums do not always have the option of continuing their education due factors like not having adequate literacy and writing skills which leads to them to drop out of secondary education or parents giving more importance to a boy’s educational needs over the girl child. Help these girls gain the required academic support through an after-school program.</p>
												<span class="text-uppercase text-theme-colored"><strong>Goal</strong></span>
												<div class="progress-item mt-0">
													<div class="progress mb-0">
														<div class="progress-bar" data-percent="<?= $per;?>"></div>
													</div>
												</div>
												<center>
													<ul class="list-inline mt-10">
														<li>Raised: &#8377; <?= $amount_raised;?></li>
														<li>Goal:  &#8377; 5,28,000</li>
													</ul>
													<div class="donate-details">
                            <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait..." data-toggle="modal" data-target="#campSakhi">Donate</button>
                         </div>
                       </div>
                     </div>
                       <!--<a class="btn btn-theme-colored btn-circled btn-lg mt-5" href="#"><i class="fa fa-heart"></i></a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="clearfix"></div>
             <div class="vertical-nav-widget p-20 pt-10">
              <div class="widget no-border">
                <div class="causes-details clearfix border-bottom p-10 pt-10">
                  <p class="mb-5 mt-5"><div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="donate-details">
                      <strong>Contact Details</strong><br />
                      <ul>
                        <li class="font-14 mb-5"> <i class="fa fa-phone text-theme-colored"></i> <a class="text-gray" href="#">+91 - 9910177722</a> </li>
                        <li class="font-14 mb-5"> <i class="fa fa-clock-o text-theme-colored"></i> Mon-Fri 8:00am to 8:00pm </li>
                        <li class="font-14 mb-5"> <i class="fa fa-envelope-o text-theme-colored"></i> <a class="text-gray" href="#">contact@neikee.com</a> </li>
                      </ul>
                     </center>
                   </div>      
                 </div>
               </div>
             </div>
           </div>
         </div>-->
       </header>

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
             <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="../images/Sakhi/Sakhi(12).jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
              <!-- MAIN IMAGE -->
              <img src="../images/Sakhi/Sakhi(3).jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
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
      <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="../images/Sakhi/Sakhi(14).jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
       <!-- MAIN IMAGE -->
       <img src="../images/Sakhi/Sakhi(1).jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
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
<li data-index="rs-3" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="../images/Sakhi/Sakhi(15).jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
  <!-- MAIN IMAGE -->
  <img src="../images/Sakhi/Sakhi(20).jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
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
<div class="tp-caption BigBold-SubTitle tp-resizeme rs-parallaxlevel-0" id="rs-3-layer-2" data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"  data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']" data-width="['410','410','410','280']"
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
								<p class="mb-5 mt-5"><span class="text-theme-colored"><strong>Aarti, a young Change Maker has been continuously leading slum based girl’s education in Mumbai as a ‘one-woman army’. Eight years back, she herself was a slum based school drop-out with no hope of continuing her education, but today she takes pride in helping more than 300 girls from her slum community through her NGO, Sakhi for Girls Education.</strong></span>
									<ul>
										<li>SAKHI wishes to create safe and quality learning space where slum based girls will able to come together for building their basic educational capacities and life skills, so every girl will able to continue her school confidently with quality learning.</li>
										<li><span class="text-theme-colored"><strong>The girls develop their reading and writing skills as well as have access to a library of English and Marathi books along with gaining basic computer literacy skills. Educational capacity building classes & Life skills building sessions form an integral part of the curriculum at the center.</strong></span></li>
										<li></li>
										<li></li>
										<li></li>
									</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- divider: Donate Now -->
	<section id="donate-now" class="divider"  data-bg-img="../images/bg_sakhi.JPG">
		<div class="container pt-0 pb-0">
			<div class="row">
				<div class="col-md-7">
					<div class="bg-light-transparent p-40">
						<h4 class="text-uppercase line-bottom">Make a Donation Now!</h4>
						<div class="row">
							<p>The Girls Learning Centre is facing challenges towards <b>hiring a full-time female teacher</b> to teach basic English and Math concepts and <b>struggles to pay room rent.</b> A <b><big>structured curriculum for teaching</b></big> Basic English skills and Math concepts as well as building life skills for girls would be very helpful, however it doesn't have the necessary funds for all this. <hr /> 
								<br />
								Come let's try and support SAKHI in their endeavour to educate these girls by giving them a chance towards a better life. They need <b><big>your support</b></big> and the funds raised would help them throughout the year. A little bit from a lot of us will be enough for them to tide them over the year.
							</p>
                      <!--<div class="col-sm-12">
                          <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now Using Instamojo</button>
                          <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait..." data-toggle="modal" data-target="#bankDetails">Donate Now via Bank Transfer</button>
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
              </div-->
            </div>

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
      <img alt="project" src="../images/Sakhi/Sakhi(3).jpg" class="img-fullwidth">
      <div class="overlay-shade"></div>
      <div class="icons-holder">
       <div class="icons-holder-inner">
        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
         <a href="../images/Sakhi/Sakhi(3).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- Portfolio Item End -->

<!-- Portfolio Item Start -->
<div class="gallery-item">
 <div class="thumb">
  <img alt="project" src="../images/Sakhi/Sakhi(4).jpg" class="img-fullwidth">
  <div class="overlay-shade"></div>
  <div class="icons-holder">
   <div class="icons-holder-inner">
    <div class="styled-icons icon-dark icon-circled icon-theme-colored">
     <a href="../images/Sakhi/Sakhi(4).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
   </div>
 </div>
</div>
</div>
</div>
<!-- Portfolio Item End -->

<!-- Portfolio Item Start -->
<div class="gallery-item">
 <div class="thumb">
  <img alt="project" src="../images/Sakhi/Sakhi(5).jpg" class="img-fullwidth">
  <div class="overlay-shade"></div>
  <div class="icons-holder">
   <div class="icons-holder-inner">
    <div class="styled-icons icon-dark icon-circled icon-theme-colored">
     <a href="../images/Sakhi/Sakhi(5).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
   </div>
 </div>
</div>
</div>
</div>
<!-- Portfolio Item End -->

<!-- Portfolio Item Start -->
<div class="gallery-item">
 <div class="thumb">
  <img alt="project" src="../images/Sakhi/Sakhi(16).jpg" class="img-fullwidth">
  <div class="overlay-shade"></div>
  <div class="icons-holder">
   <div class="icons-holder-inner">
    <div class="styled-icons icon-dark icon-circled icon-theme-colored">
     <a href="../images/Sakhi/Sakhi(16).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
   </div>
 </div>
</div>
</div>
</div>
<!-- Portfolio Item End -->

<!-- Portfolio Item Start -->
<div class="gallery-item">
 <div class="thumb">
  <img alt="project" src="../images/Sakhi/Sakhi(6).jpg" class="img-fullwidth">
  <div class="overlay-shade"></div>
  <div class="icons-holder">
   <div class="icons-holder-inner">
    <div class="styled-icons icon-dark icon-circled icon-theme-colored">
     <a href="../images/Sakhi/Sakhi(6).jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
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
									<p><br><b>SAKHI For Girls Education</b><br>
										Contact Person: Aarti Naik, Founder & Director<br>
										Location: Mulund (West), Mumbai<br>
										Maharashtra<br><br><br></p>
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
                  <a style="padding: 10px;" target="_blank" type="submit" href= "../documents/Campaign Details_Sakhi.pdf" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Campaign Details - Girls Learning Centre</a></p>
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
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
					<a class="text-gray font-12" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
					<ul class="styled-icons icon-dark mt-20">
						<li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-sm-6 col-md-6">
				<div class="widget dark">
					<h5 class="widget-title line-bottom">Quick Contact</h5>
					<ul class="list-border">
						<li><a href="#">+91-9910177722</a></li>
						<li><a href="#">ankit@neikee.com</a></li>
						<li><a href="#" class="lineheight-20">Gurgaon, Haryana</a></li>
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
<div class="modal fade" id="campSakhi" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content p-30 pt-10">
      <h3 class="text-center text-theme-colored mb-20">Donate to Sakhi Foundation - GIRLS LEARNING CENTRE </h3>
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
        <input type="hidden" name="camp_id" id="camp_id" value="f0dcb8b65f2ed71d">
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