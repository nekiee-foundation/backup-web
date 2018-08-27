<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('connect.php');
require_once 'mailchimp/src/Mandrill.php';

	function send_verify_mail($verification_code, $user_id, $user_email){

		$token='https://neikee.com/confirmMail.php?user_id='.$user_id.'&verify_code='.$verification_code;
		//send confirmation mail with link $token
    	$mandrill = new Mandrill('a0rx8a0n5PQIwLp7n2Qcjg'); 
		$message = new stdClass();
		$message->html = "Greetings from Neikee Foundation. <br>

		Thank you for registering for '<b>Neikee</b>'<br>

		You have to verify this email for any further process. <br> ";
		$message->html .= 'Please <a href='.$token.' >click here</a> to activate your Neikee account.<br><br>Regards, 
		Neikee Foundation <br><br>  ';
		$message->html .= "<br>";

		$message->text = "text body";
		$message->subject = "Confirm Email";
		$message->from_email = "admin@neikee.com";
		$message->from_name  = "Neikee Foundation";
		$message->to = array(array("email" => $user_email));
		$message->track_opens = true;

		$response = $mandrill->messages->send($message);

	}




if (isset($_POST['register']) && $_POST['register']=="true"){
  try {

    $sql = $con->prepare("SELECT * FROM users WHERE email = :email OR username = :username");
    $sql->bindParam(':username', $_POST['form_choose_username'], PDO::PARAM_STR);   
    $sql->bindParam(':email', $_POST['form_email'], PDO::PARAM_STR);
    $sql->execute();
    $result = $sql->fetch();

    if ($result > 0){
      echo 'This username/email already exists.';
    }
    else{    

      $password = base64_encode($_POST['form_choose_password']);
      $user_id = bin2hex(openssl_random_pseudo_bytes(8)); //generating unique user id
      $verify_code = bin2hex(openssl_random_pseudo_bytes(16));
      $sql = "INSERT users SET username = :username,
      name = :name,          
      email = :email,
      password = :password,
      verify_code = :verify_code,
      user_id = :user_id";
      $stmt = $con->prepare($sql);                                  
      $stmt->bindParam(':username', $_POST['form_choose_username'], PDO::PARAM_STR);   
      $stmt->bindParam(':email', $_POST['form_email'], PDO::PARAM_STR);
      $stmt->bindParam(':name', $_POST['form_name'], PDO::PARAM_STR); 
      $stmt->bindParam(':password', $password, PDO::PARAM_STR); 
      $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR); 
      $stmt->bindParam(':verify_code', $verify_code, PDO::PARAM_STR); 
      $stmt->execute();

      echo "User registered succesfully!";

      send_verify_mail($verify_code, $user_id, $_POST['form_email']);
    }
    }
    catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
    }
  }     

else {
  header("Location: ../index.php");
}


?>