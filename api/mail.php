<?php

$message = $_POST['message'];
if(empty($message)){
	http_response_code(400);
	echo "Invalid Msg";
	exit;
}else{

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "ram.katneni@icloud.com";
       // $recipient = "shivakumar.ryo@gmail.com,Vasanth2011@gmail.com";
        
		$name = "New User";
		$email = "newuser@gmail.com";
		$subject ="New Email";
				// Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        mail($recipient, $subject, $email_content, $email_headers);
    }
?>
