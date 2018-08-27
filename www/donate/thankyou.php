<?php require_once("connect.php");?>
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

    <title>Thank You, Mojo</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">

      <div class="page-header">
        <h1><a href="index.php">Instamojo Payment</a></h1>
        
      </div>

      <h3 style="color:#6da552">Thank You, Payment success!!</h3>
      <br>

      <a href="https://neikee.com/user_login.php"><button type="button" class="btn btn-success">Proceed to Dashboard</button></a>
  


  <?php

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('07903a9d17f8264871c09f27d57f5f66','eb4aec4af3c58e55d50482fdc398e8f7','https://www.instamojo.com/api/1.1/');


$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);
    

    echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
     echo "<h4>Payment Amount: " . $response['payments'][0]['amount'] . "</h4>" ;
    $sql = "UPDATE student SET Payment = '".$response['payments'][0]['amount']."',Payment_id = '".$response['payments'][0]['payment_id']."' WHERE email ='".$response['payments'][0]['buyer_email']."'";
                if($conn->query($sql)){
                  echo "";
                } 
                else {
                  # code...
                  echo "error";
                }
  //echo "<pre>";
  // print_r($response);
//echo "</pre>";

    ?>


    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>


      
    </div> <!-- /container -->


  </body>
</html>