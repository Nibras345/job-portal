<?php
// Assuming you have obtained the post data from your HTML form
$author = "Walter Houston";
$title = "With WooLentor's drag-and-drop interface for creating...";
$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry...";
$postDate = "2022-04-03";
$readTime = "10 min read";

// Establish a connection to the MySQL database
// $servername = "your_servername";
// $username = "your_username";
// $password = "your_password";
// $dbname = "your_dbname";
$conn = mysqli_connect("localhost", "root", "", "job-portal");

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO blog_posts (author, title, content, post_date, read_time) VALUES (:author, :title, :content, :post_date, :read_time)");
    
    // Bind parameters and execute the statement
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':post_date', $postDate);
    $stmt->bindParam(':read_time', $readTime);
    
    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; // Close the connection
?>
