<?php 
if($_POST) {
	$to = "ramkirat1991@gmail.com";
	$subject = "Feedback from SGI Tech Pvt. Ltd.";

	$message = '<html><body>';
	$message .= '<table rules="all" style="border-color: #666; width: 100%;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['Sname']) . "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['Semail']) . "</td></tr>";
	$message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['Ssubject']) . "</td></tr>";
	$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['Smessage']) . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";


	 $headers = "From:  info@sgitech.in\r\n";
	 $headers .= "MIME-Version: 1.0\r\n";
	 $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	 if($email) {
	   $headers .= "\r\nReply-To: $email";
	   //  $headers .= "Reply-To: ". strip_tags($_POST['Semail']) . "\r\n";
	   //  $headers .= "CC: susan@example.com\r\n";
	 }
	 $success = mail($to, $subject, $message, $headers, '-framkirat1991@gmail.com');
}


?>