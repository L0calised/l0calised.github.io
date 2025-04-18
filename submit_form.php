<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email settings
    $to = "youremail@example.com";  // Replace with your email
    $subject = "New Contact Form Submission";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";

    // Message to send
    $email_message = "You have received a new message from your website contact form:\n\n";
    $email_message .= "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href = 'contact.html';</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.'); window.location.href = 'contact.html';</script>";
    }
}
?>
