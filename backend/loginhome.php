<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

// Welcome message
echo 'Welcome, ' . $_SESSION['username'] . '!';

?>
