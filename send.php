<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email configuration
    $to = "ndhlovukholwani@gmail.com";  // Replace with your email address
    $subject = "New Booking Request";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Email body
    $email_body = "<html><body>";
    $email_body .= "<h1>Booking Request</h1>";
    $email_body .= "<p><strong>Name:</strong> $name</p>";
    $email_body .= "<p><strong>Email:</strong> $email</p>";
    $email_body .= "<p><strong>Message:</strong><br>$message</p>";
    $email_body .= "</body></html>";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
