<?php
    $to = "juandavidmarulanda@yahoo.com"; 
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name'];
    $message = $_REQUEST['message'];
    $phone = $_REQUEST['phone'];
    $headers = "From: $from"; 
    $subject = "You have a message sent from your site"; 
    $fields = array(); 
    $fields{"name"} = $name; 
    $fields{"email"} = $email; 
    $fields{"phone"} = $phone; 
    $fields{"message"} = $message;
    $body = "Este es el Form:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
    $send = mail($to, $subject, $body, $headers);
?>
