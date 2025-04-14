<?php
include "db_connect.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $TITLE = $_POST["contentTitle"];
    $TEXT = $_POST["text"];

    // Prevent SQL injection
    $TITLE = $conn->real_escape_string($TITLE);
    $TEXT = $conn->real_escape_string($TEXT);

    // Insert data into the table
    $sql = "INSERT INTO info (TITLE, TEXT) VALUES ('$TITLE', '$TEXT')";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        echo "error: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>