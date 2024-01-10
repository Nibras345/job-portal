<?php

$conn = mysqli_connect("localhost", "root", "", "job-portal");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ssbb"])) {
    $job_keywords = $_POST["job_keywords"];
    $selected_city = $_POST["selected_city"];
    $selected_category = $_POST["selected_category"];

    $sql_cities = "SELECT * FROM cities WHERE city_name LIKE '%$job_keywords%'";
    $result_cities = $conn->query($sql_cities);

    if ($result_cities && $result_cities->num_rows > 0) {
        while ($row = $result_cities->fetch_assoc()) {
        }
    }

    $sql_categories = "SELECT * FROM categories WHERE category_id = '$selected_category'";
    $result_categories = $conn->query($sql_categories);

    if ($result_categories && $result_categories->num_rows > 0) {
        while ($row = $result_categories->fetch_assoc()) {
        }
    } 
}

?>