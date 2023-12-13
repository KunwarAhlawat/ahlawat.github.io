<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Email recipient (replace with your email address)
    $to = "kunwarahlawat@gamil.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Compose the email message
    $email_message = "You have received a new message from the contact form:\n\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect after sending the email (you can customize the URL)
    header("Location: thank_you.html");
    exit();
}
?>
