<?php 
require_once("../php/connect.php");
$id = base64_decode($_GET['id']);
if(isset($_GET['id'])){
$_SESSION["id"] = (isset($id) ? $id : null);
$sql="SELECT * FROM student where id = '".$_SESSION["id"]."'";
$result=$conn->query($sql);

$name; $email; $mobno;$univ;

while($row=$result->fetch_assoc()){

	$name = $row['Name'];
	$email = $row['email'];
	$mobno = $row['Contact'];
  $univ = $row['Univ_name'];
}
$prd_name = "ICamp 2017";
if($univ==="KIIT"){
  $prd_price = 260;
}
else{
  $prd_price = 412;
}	

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ICamp Payment</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="navbar.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
  <!-- navbar-->
<header role="banner" id="fh5co-header">
    <div class="fluid-container">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <!-- Mobile Toggle Menu Button -->
          <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>

          <a class="navbar-brand" href="index.html"><img src="icamp.png" height="50px" width="65px"></a>
          <a class="navbar-brand" href="">Internship Camp'17</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="http://interncamp.ecell.org.in" data-nav-section="home"><span>Home</span></a></li>
            
            <li class="active"><a href="login%20(1).php"><span>Student</span></a></li>
            
            
            <li><a href="start-reg.php">Startup</a></li>
            <li><a href="../logout.php"><span>Logout</span></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header><br><br><br>
    <div class="container">

      <div class="page-header">

        <h1><a href="index.php">Internship Camp 2017 Payment</a></h1>
        <?php if($univ==="KIIT"){
  echo '<p class="lead">You will be charged ₹250 + Service Tax to register for ICamp. Please enter your details below.<b>Do not refresh the page.</b></p>';
}
else{
  echo '<p class="lead">You will be charged ₹400 + Service Tax to register for ICamp. Please enter your details below.<b>Do not refresh the page.</b></p>';
} ?>
        
      </div>

		<h3>Your Payment Details </h3>
		<hr>
		<form action="pay.php" method="POST" accept-charset="utf-8">
	
		<input type="hidden" name="product_name" value="<?php echo $prd_name; ?>"> 
		<input type="hidden" name="product_price" value="<?php echo $prd_price; ?>"> 

		<div class="form-group">
    	<label>Your Name</label>
   		<input type="text" class="form-control" name="name" placeholder="Enter your name" value="<?php echo $name ?>"> 	 <br/>
		</div>

		<div class="form-group">
    	<label>Your Phone</label>
   		<input type="text" class="form-control" name="phone" placeholder="Enter your phone number" value="<?php echo $mobno ?>"> <br/>
		</div>


		<div class="form-group">
    	<label>Your Email</label>
   		<input type="email" class="form-control" name="email" placeholder="Enter you email" value="<?php echo $email ?>" readonly> <br/>
		</div>

	  <div class="form-group">
      <label>University</label>
      <input type="text" class="form-control" name="univ" value="<?php echo $univ ?>" readonly> <br/>
    </div>
		<input type="submit" class="btn btn-success btn-lg" value="Click here to Pay" disabled="disabled"><br><h2>Payment has been closed.</h2> 

		 </form>
 <br/>
  <br/>     
    </div> <!-- /container -->
    <br><br><br>
<div id="fh5co-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 to-animate">
          <h3 class="section-title">About Us</h3>
          <p>Imagine | Innovate | Implement</p>
          <p class="copy-right">&copy;  Copyright 2017. KIIT E-Cell, KIIT University <br>All Rights Reserved. <br>
            Designed by <a href="#" target="_blank">KIIT E-Cell Web Developer</a>
            
          </p>
        </div>

        <div class="col-md-4 to-animate">
          <h3 class="section-title">Our Address</h3>
          <ul class="contact-info">
            <li><i class="icon-map-marker"></i>KIIT Entrepreneurship Cell</li>
            <li><i class="icon-phone"></i>+91 9583785500</li>
            <li><i class="icon-envelope"></i><a href="#">info@ecell.org.in</a></li>
            <li><i class="icon-globe2"></i><a href="#">www.ecell.org.in</a></li>
          </ul>
          <h3 class="section-title">Connect with Us</h3>
          <ul class="social-media">
            <li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
            <li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
            <li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
          </ul>
        </div>
        <div class="col-md-4 to-animate">
          <h3 class="section-title">Drop us a line</h3>
          <form class="contact-form">
            <div class="form-group">
              <label for="name" class="sr-only">Name</label>
              <input type="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="message" class="sr-only">Message</label>
              <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  </body>
</html>
<?php } 
else{
	header("Location: /");
}

?>