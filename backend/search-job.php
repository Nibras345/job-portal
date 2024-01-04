<?php

$conn = mysqli_connect("localhost", "root", "", "job-portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "ssbb") {
    $selectedCity = $_POST['selected_city'];
    $selectedCategory = $_POST['selected_category'];

    $sql = "SELECT jobs_table.job_title, jobs_table.other_info_column 
            FROM jobs_table 
            INNER JOIN city_table ON jobs_table.city_id = city_table.city_id 
            INNER JOIN category_table ON jobs_table.category_id = category_table.category_id 
            WHERE jobs_table.city_id = '$selectedCity' 
            AND jobs_table.category_id = '$selectedCategory'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Job Title: " . $row["job_title"] . "<br>";
            echo "Other Information: " . $row["other_info_column"] . "<br>";
        }
    } else {
        echo "No results found for the selected criteria";
    }
}

$conn->close();
?>