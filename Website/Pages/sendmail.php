<?php

// Replace this with your own email address
$to = $email;

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if(isset($_POST['sendmsg'])) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $subject = trim(stripslashes($_POST['subject']));
   $message = trim(stripslashes($_POST['message']));

   $to = "$email";
   $subject = $message;

   $message = "Name: {$name} Email: {$email} Subject: {$subject}" . $message;


	// if ($subject == $subject) { $subject = "Contact Form Submission"; }

   // // Set Message
   // $message .= "Email from: " . $name . "<br />";
	// $message .= "Email address: " . $email . "<br />";
   // $message .= "Message: <br />";
   // $message .= nl2br($contact_message);
   // $message .= "<br /> ----- <br /> This email was sent from your site " . url('http://localhost/ticketBuckets/website/Pages/index.php') . " contact form. <br />";

   // // Set From: header
   // $from =  $name . " <" . $email . ">";

   // // Email Headers
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $email . "\r\n";
 	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   // ini_set("$email", $to); // for windows server
   // $mail = mail($to, $subject, $message, $headers);

	// if ($mail) { echo "OK"; }
   // else { echo "Something went wrong. Please try again."; }

}

?>