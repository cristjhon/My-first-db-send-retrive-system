<?php
include "db_connect.php";

$sql = "SELECT TITLE, TEXT FROM info";
$result = $conn->query($sql);

$data = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data .= "<div class='card''>";
        $data .= "<h3>" . htmlspecialchars($row["TITLE"]) . "</h3>";
        $data .= "<p>" . htmlspecialchars($row["TEXT"]) . "</p>";
        $data .= "</div>";
    }
} else {
    $data = "<p>No content available.</p>";
}

echo $data;

$conn->close();

?>