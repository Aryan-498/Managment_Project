<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Save or email the form data
    // Example: send an email
    mail("your-email@example.com", "New Contact Us Inquiry", $message, "From: " . $email);

    // Redirect user to a confirmation page
    header("Location: thank-you.html");
    exit();
}
?>
