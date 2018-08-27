<?php 
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('../php/connect.php');

if(!isset($_SESSION["Username"]) || !isset($_SESSION["Password"])){    
  header("location:../login.php");
  die();
}

if(isset($_SESSION["Username"]) && isset($_SESSION["Password"])){
    $result = $con->prepare("SELECT * FROM users WHERE user_id ='".$_SESSION["Username"]."' ");
    $result->execute();
    $row = $result->fetch();

    $product_name = $_POST["camp_id"];
    $price = $_POST["donation_amt"];
    $name = $row['name'];
    $email = $row['email'];

    include 'src/instamojo.php';

    $api = new Instamojo\Instamojo('6f0ca277bcd7c37e36d0775a024c9ff3', '21e0595c03907e75befc4609539640de','https://www.instamojo.com/api/1.1/');   

try {
        $trans_id = bin2hex(openssl_random_pseudo_bytes(8));
     $response = $api->paymentRequestCreate(array(
        "purpose" => $trans_id,
        "amount" => $price,
        "buyer_name" => $name,
        "send_email" => true,
        "send_sms" => false,
        "email" => $email,

        'allow_repeated_payments' => false,
        "redirect_url" => "https://neikee.com/test/thankyou.php",
        "webhook" => "https://neikee.com/test/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];  //Redirect($response['longurl'],302); //Go to Payment page   

         
         $status = "Pending";
         $timestamp = time();
         $instamojo_id = "Not generated";

    $sql = "INSERT transactions SET trans_id = :trans_id,
            user_id = :user_id,
            instamojo_id = :instamojo_id,
            camp_id = :camp_id,
            trans_amt = :trans_amt,
            timestamp = :timestamp,
            status = :status";
            $stmt = $con->prepare($sql);                                  
            $stmt->bindParam(':trans_id', $trans_id, PDO::PARAM_STR);
            $stmt->bindParam(':user_id', $_SESSION["Username"], PDO::PARAM_STR); 
            $stmt->bindParam(':instamojo_id', $instamojo_id, PDO::PARAM_STR); 
            $stmt->bindParam(':camp_id', $_POST["camp_id"], PDO::PARAM_STR); 
            $stmt->bindParam(':trans_amt', $_POST["donation_amt"], PDO::PARAM_STR); 
            $stmt->bindParam(':status', $status, PDO::PARAM_STR); 
            $stmt->bindParam(':timestamp', $timestamp, PDO::PARAM_STR); 
            $stmt->execute();

    header("Location: $pay_ulr");
    exit(); 
   
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}      
}


  ?>
