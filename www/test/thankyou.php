<?php 
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
require_once("connect.php");


include 'src/instamojo.php';

$api = new Instamojo\Instamojo('6f0ca277bcd7c37e36d0775a024c9ff3', '21e0595c03907e75befc4609539640de','https://www.instamojo.com/api/1.1/');


$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);

            $sql = "UPDATE transactions SET instamojo_id = :instamojo_id,           
            trans_amt = :trans_amt,
            status = :status
            WHERE trans_id = :trans_id";
            $stmt = $con->prepare($sql);                                  
            $stmt->bindParam(':instamojo_id', $response['payments'][0]['payment_id'], PDO::PARAM_STR);
            $stmt->bindParam(':trans_amt', $response['amount'], PDO::PARAM_STR); 
            $stmt->bindParam(':status', $response['status'], PDO::PARAM_STR); 
            $stmt->bindParam(':trans_id', $response['purpose'], PDO::PARAM_STR); 
            $stmt->execute(); 

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
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

    <title>Thank You, Neikee Foundation</title>

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
        <h1><a href="index.php">Donation</a></h1>
        
      </div>

      <h3 style="color:#6da552">Thank You, Donation success!!</h3>
      <br>

      <a href="https://neikee.com/user_profile.php"><button type="button" class="btn btn-success">Proceed to Dashboard</button></a>
  


  <?php


?>


      
    </div> <!-- /container -->


  </body>
</html>
