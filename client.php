<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Panel</title>
    <style>
        /* General styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        #contentlayout {
            width: 100%;
            height: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Content display area */
        #addedContent {
            border: 2px solid #333;
            background: white;
            height: 90%;
            width: 90%;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            overflow-y: auto;
        }

        /* Style for each added content card */
        .card {
            background: white;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            width: 95%;
        }

        /* Title inside the card */
        .card h3 {
            margin: 0;
            font-size: 20px;
            color: #007bff;
        }

        /* Text inside the card */
        .card p {
            margin: 5px 0 0;
            font-size: 16px;
            color: #333;
        }
    </style>

    <script src="dispdata.js"></script>
</head>

<body>

    <div id="contentlayout">
        <div id="addedContent">

        </div>
    </div>
</body>

</html>