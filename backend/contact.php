<?php 

	$conn = mysqli_connect("localhost", "root", "", "job-portal");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["msg"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
	
		$sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`)
				VALUES ('$name','$email','$subject','$message')";
		$result = mysqli_query($conn, $sql);
	
		if ($result) {
			echo "Data inserted successfully!";
		} else {
			echo "Error: " . mysqli_error($conn);
		}
	}

	

?>