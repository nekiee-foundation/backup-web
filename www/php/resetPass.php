<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('connect.php');
require_once 'mailchimp/src/Mandrill.php';



	function send_reset_mail($verification_code, $user_id, $user_email){

		$token='https://neikee.com/login.php?user_id='.$user_id.'&reset_code='.$verification_code;
		//send confirmation mail with link $token
    	$mandrill = new Mandrill('a0rx8a0n5PQIwLp7n2Qcjg'); 
		$message = new stdClass();
		$message->html = "Password Reset for Neikee Foundation. <br>

		This is a password reset email of your '<b>Neikee</b>' account.<br>

		Click the link below.<br> ";
		$message->html .= 'Please <a href='.$token.' >click here</a> to reset the password of your Neikee account.<br><br>Regards, 
		Neikee Foundation <br><br>  ';
		$message->html .= "<br>";

		$message->text = "text body";
		$message->subject = "Password Reset";
		$message->from_email = "admin@neikee.com";
		$message->from_name  = "Neikee Foundation";
		$message->to = array(array("email" => $user_email));
		$message->track_opens = true;

		$response = $mandrill->messages->send($message);

	}

	function updateResetCode($con, $user_id, $reset_code) {
		$sql = "UPDATE users SET reset_code = :reset_code
		WHERE user_id = :user_id";
      $stmt = $con->prepare($sql);                                  
      $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);   
      $stmt->bindParam(':reset_code', $reset_code, PDO::PARAM_STR);
      $stmt->execute();
	}


if (isset($_POST['user_id']) && isset($_POST['reset'])){

  try {

    $sql = $con->prepare("SELECT * FROM users WHERE email = :email OR username = :username");
    $sql->bindParam(':username', $_POST['user_id'], PDO::PARAM_STR);   
    $sql->bindParam(':email', $_POST['user_id'], PDO::PARAM_STR);
    $sql->execute();
    $result = $sql->fetch();

    if ($result > 0){
    	$verify_code = bin2hex(openssl_random_pseudo_bytes(16));

    	updateResetCode($con, $result['user_id'], $verify_code);
    	send_reset_mail($verify_code, $result['user_id'], $result['email']);




       echo 'Email sent, check your inbox to reset password.';

    }

    else{
    	 echo 'This username/email does not exists.';
    }
    
    }
    catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
    }
  }   



  if (isset($_POST['newPass1']) && isset($_POST['setPass'])){

  		$sql = $con->prepare("SELECT * FROM users WHERE user_id = :user_id");
    $sql->bindParam(':user_id', $_POST['user_id'], PDO::PARAM_STR);
    $sql->execute();
    $result = $sql->fetch();

    if ($result > 0){

    	$reset_code = NULL;
    	$password = base64_encode($_POST['newPass1']);
    	if($result['reset_code']!=NULL && $result['reset_code']==$_POST['token']){
    		$sql = "UPDATE users SET password = :password,
    		reset_code = :reset_code
		WHERE user_id = :user_id";
      $stmt = $con->prepare($sql);                                  
      $stmt->bindParam(':password', $password, PDO::PARAM_STR);   
      $stmt->bindParam(':reset_code', $reset_code, PDO::PARAM_STR);
      $stmt->bindParam(':user_id', $_POST['user_id'], PDO::PARAM_STR);
      $stmt->execute();
      echo "New Password updated Succesfully!";

    	}

    	else{
    		echo "Token Expired!";
    	}

    }

    else{
    	echo "User not found!";
    }


  	
  }















?>