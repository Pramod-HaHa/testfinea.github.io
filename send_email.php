<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the latitude and longitude from the form
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    // Replace 'your_gmail@gmail.com' with your Gmail address
    $to_email = 'your_gmail@gmail.com';

    // Subject and body of the email
    $subject = 'User Location';
    $message = "Latitude: $latitude\nLongitude: $longitude";

    // Headers
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (mail($to_email, $subject, $message, $headers)) {
        echo '<script>alert("Location sent successfully.");</script>';
    } else {
        echo '<script>alert("Failed to send location.");</script>';
    }
}
?>
