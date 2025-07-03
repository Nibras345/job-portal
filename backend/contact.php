<?php
// backend/contact.php

$conn = mysqli_connect('localhost', 'root', '', 'job-portal');
if (!$conn) {
	exit('DB connection failed: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['c_submit'])) {
	// grab the correct form fields
	$name    = trim($_POST['c_name']    ?? '');
	$email   = trim($_POST['c_email']   ?? '');
	$subject = trim($_POST['c_subject'] ?? '');
	$message = trim($_POST['c_message'] ?? '');

	// simple validation
	if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $subject && $message) {

		// use a prepared statement to avoid SQL injection
		$stmt = $conn->prepare(
			'INSERT INTO contact (name, email, subject, message) VALUES (?,?,?,?)'
		);
		$stmt->bind_param('ssss', $name, $email, $subject, $message);

		if ($stmt->execute()) {
			echo 'Data inserted successfully!';
		} else {
			echo 'Error inserting: ' . $stmt->error;
		}
		$stmt->close();
	} else {
		echo 'Please fill in all fields with valid data.';
	}
}
