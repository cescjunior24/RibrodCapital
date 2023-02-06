<?php

if($_POST){
    $first_name = "";
    $last_name= "";
    $organitzation= "";
    $mail = "";
    $subject = ""; 

    if(isset($_POST['first_name'])) {
        $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['last_name'])) {
        $last_name= filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['organitzation'])) {
        $organitzation = filter_var($_POST['organitzation'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['mail'])) {
    	$mail = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['mail']);
    	$mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    }
    if(isset($_POST['subject'])) {
    	$subject = htmlspecialchars($_POST['subject']);
    }
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $first_name . "\r\n";
    
    if(mail($first_name, $mail, $subject, $headers)) {
    	echo "<p>Thank you for contacting us, $first_name . You will get a reply within 24 hours.</p>";
    } 
    else {
    	echo '<p>We are sorry but the email did not go through.</p>';
    }
    

}
?>