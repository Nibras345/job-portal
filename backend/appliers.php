<?php
include_once("database.php");

if (isset($_POST["apply"])) {
    $first_name = $_POST["Name"];
    $last_name = $_POST["Lname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone"];
    $applied_position = $_POST["position"];

    $resumeFileName = $_FILES['resume_file']['name'];
    $resumeTmpName = $_FILES['resume_file']['tmp_name'];

    $resumeData = file_get_contents($resumeTmpName);
    $escapedResumeData = mysqli_real_escape_string($conn, $resumeData);

    $sql = "INSERT INTO `appliers` (`first name`, `last name`, `email`, `phone number`, `position`, `resume file`)
            VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$applied_position', '$escapedResumeData')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Application submitted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>