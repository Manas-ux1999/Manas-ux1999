<?php
session_start();

if (isset($_POST['Send'])) {
    // Process form submission and send email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient's email address
    $to = "mranjandash4@gmail.com";
    $subject = "Customer Contact.";
    $txt = "Your: " . $name . " and Contact No: " . $phone . " and message: " . $message;
    $headers = "From: info@gvitechnology.com" . "\r\n";
    mail($to, $subject, $txt, $headers);

    // Set a session flag to indicate successful submission
    $_SESSION['form_submitted'] = true;

    // Redirect to index.php to avoid form resubmission on page refresh
    header("Location: index.php#contact");
    exit;
}
?>
