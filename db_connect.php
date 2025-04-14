<?php
// Database connection settings
$host = "localhost";
$user = "root"; // Default user in XAMPP
$pass = ""; // No password by default
$dbname = "content"; // Change this to your database name

// Create a connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//passing that if statement means the connection is successfull
?>