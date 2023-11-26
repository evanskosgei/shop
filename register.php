<?php

require 'dbconnect.php';

$username = $_POST['username'];
$email = $_POST['email'];


$sql = "INSERT INTO users (username, email) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $email);



if ($stmt->execute()) {
    // Send email to registered user
    $subject = "Welcome to Our Website";
    $body = "Thank you for registering on our website. Please click on the following link to activate your account: [link]";
    $headers = "From: noreply@website.com";

    if (mail($email, $subject, $body, $headers)) {
        echo "Registration successful. Please check your email to activate your account.";
    } else {
        echo "Failed to send email. Please contact us for assistance.";
    }
} else {
    echo "Error registering user.";
}
$stmt->close();
$conn->close();