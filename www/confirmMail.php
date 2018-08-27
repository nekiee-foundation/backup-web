<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/connect.php');

	if (isset($_GET['user_id'], $_GET['verify_code'])){

		$result = $con->prepare("SELECT * FROM users WHERE user_id ='".$_GET['user_id']."' AND verify_code ='".$_GET['verify_code']."' ");
    	$result->execute();
		$row = $result->fetch();
		if($row>0){

			$verify = 1;

			$sql = "UPDATE users SET verify = :verify
					WHERE user_id = :user_id";
      		$stmt = $con->prepare($sql);                                  
     		$stmt->bindParam(':verify', $verify, PDO::PARAM_STR);   
     		$stmt->bindParam(':user_id', $_GET['user_id'], PDO::PARAM_STR);      
    		$stmt->execute();

    		$_SESSION["Username"] = $_GET['user_id'];
    		$_SESSION["Password"] = $row['password'];     
  			header("location:user_profile.php");

		}
		else {
		header("location:index.php");
	}

	}

	else {
		header("location:index.php");
	}





?>