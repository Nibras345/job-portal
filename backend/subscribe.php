<?php

$conn = mysqli_connect("localhost", "root", "", "job-portal");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $existing_query = "SELECT * FROM subscribers WHERE email = '$email'";
            $result = mysqli_query($conn, $existing_query);

            if (mysqli_num_rows($result) > 0) {
                echo "You are already subscribed!";
            } else {

                $insert_query = "INSERT INTO subscribers (email) VALUES ('$email')";

                if (mysqli_query($conn, $insert_query)) {
                    echo "Thank you for subscribing! Your email is: " . $email;
                } else {
                    echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
                }
            }
        } else {
            echo "Invalid email address!";
        }
    } else {
        echo "Email address is required!";
    }
} else {
    echo "Invalid request!";
}

mysqli_close($conn);
