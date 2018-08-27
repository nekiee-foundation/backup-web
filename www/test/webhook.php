<?php
require_once("connect.php");
$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.

$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];

if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}

// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without the <>.
$mac_calculated = hash_hmac("sha1", implode("|", $data), "ccbdde5bb88648e69df063153072ac94");

if($mac_provided == $mac_calculated){
    echo "MAC is fine";
    // Do something here
    if($data['status'] == "Credit"){
       // Payment was successful, mark it as completed in your database    
       $status = "Success";   

        /*$sql = "UPDATE transactions SET status = :status
            WHERE trans_id = :trans_id";
            $stmt = $con->prepare($sql);                                  
            $stmt->bindParam(':trans_id', $data['id'], PDO::PARAM_STR);            
            $stmt->bindParam(':status', $status, PDO::PARAM_STR); 
            $stmt->execute();
            */
             $sql = "INSERT transactions SET trans_id = :trans_id,
            insta_id = :insta_id, 
            user_id = :user_id,
            camp_id = :camp_id,
            trans_amt = :trans_amt,
            timestamp = :timestamp,
            status = :status";
            $stmt = $con->prepare($sql);                                  
            $stmt->bindParam(':trans_id', $data['payment_id'], PDO::PARAM_STR);
            $stmt->bindParam(':insta_id', $data['payment_id'], PDO::PARAM_STR); 
            $stmt->bindParam(':user_id', $data['buyer_name'], PDO::PARAM_STR); 
            $stmt->bindParam(':camp_id', $data['buyer_name'], PDO::PARAM_STR); 
            $stmt->bindParam(':trans_amt', $data['buyer_name'], PDO::PARAM_STR); 
            $stmt->bindParam(':timestamp', $data['buyer_name'], PDO::PARAM_STR); 
            $stmt->bindParam(':status', $data['buyer_name'], PDO::PARAM_STR); 
            $stmt->execute();


    }
    else{
       // Payment was unsuccessful, mark it as failed in your database
    }
}
else{
    echo "Invalid MAC passed";
}
?>