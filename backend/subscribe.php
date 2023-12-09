<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = 'subscribers.txt';

        // Save email to a file (append mode)
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);

        // You can also save to a database here
        // Example: Insert $email into a 'subscribers' table

        echo "Thank you for subscribing!";
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
}
?>

