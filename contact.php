<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'From: ' . $email; // Correct the 'From' field
		$to = 'ashutoshv5390@gmail.com'; 
		$subject = $_POST['subject']; 
		
		$body = "From: $name\nE-Mail: $email\nSubject: $subject\nMessage:\n$message";
		
		$headers = "From: $email\r\n"; // Use headers parameter for mail
		$headers .= "Reply-To: $email\r\n";
		
		// Attempt to send the email
		if (mail($to, $subject, $body, $headers)) {
			header("Location: thank-you.html"); // Redirect on success
			exit(); // Ensure script stops after redirection
		} else {
			die("Error sending the email!");
		}
	}
?>
