<?php 

	$conn = mysqli_connect("localhost", "root", "", "job-portal");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_POST["cho"])){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["msg"];

		$sql = "INSERT INTO `candidate_contact`(`name`, `email`, `message`) 
				VALUES ('$name','$email','$message')";
		$result = mysqli_query($conn, $sql);

		if($result){
			echo "Your data has been inserted successfully!";
		} else {
			echo "Error: " . mysqli_error($conn);
		}
	}

?>