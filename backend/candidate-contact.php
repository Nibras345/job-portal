<?php
$conn = mysqli_connect('localhost', 'root', '', 'job-portal');
if (!$conn) {
	exit('Connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['cho'])) {              // make sure the form really sends “cho”
	$name    = trim($_POST['name']    ?? '');
	$email   = trim($_POST['email']   ?? '');
	$message = trim($_POST['msg']     ?? '');

	// basic validation
	if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$message) {
		exit('Please fill all fields with valid data.');
	}

	// prepared statement = no SQL‑injection AND handles quotes/apostrophes automatically
	$stmt = $conn->prepare(
		'INSERT INTO candidate_contact (name, email, message) VALUES (?,?,?)'
	);
	$stmt->bind_param('sss', $name, $email, $message);

	if ($stmt->execute()) {
		echo 'Your data has been inserted successfully!';
	} else {
		echo 'Error inserting: ' . $stmt->error;
	}
	$stmt->close();
}
