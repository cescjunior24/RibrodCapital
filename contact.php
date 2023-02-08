<?php

if($_POST){
    $first_name = "";
    $last_name= "";
    $organitzation= "";
    $mail = "";
    $subject = ""; 
    $mailpropietario="francescg98@gmail.com";

    if (!filter_var($first_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]+$/")))) {
        echo "Invalid first name";
    }
    
    if (!filter_var($last_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]+$/")))) {
        echo "Invalid last name";
    }
    
    if (!filter_var($organitzation, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z0-9]+$/")))) {
        echo "Invalid organization";
    }
    
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
    }
    
    if (empty($subject)) {
        echo "Subject is required";
    }
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $mail . "\r\n";
    
    if(mail($mailpropietario, $organitzation, $subject, $headers)) {
    	echo "<p>Thank you for contacting us, $first_name . You will get a reply within 24 hours.</p>";
    } 
    else {
    	echo '<p>We are sorry but the email did not go through.</p>';
    }


    

}
?>