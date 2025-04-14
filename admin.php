<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
            height: 60%;
            width: 90%;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            overflow-y: auto;
        }

        /* Add button container */
        #addContent {
            height: 30%;
            width: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Add button */
        #addBtn {
            height: 90px;
            width: 90px;
            border-radius: 50%;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s ease-in-out;
        }

        #addBtn:active {
            background-color: #0056b3;
            transform: scale(0.95);
        }

        /* Form pop-up */
        #addForm {
            display: none;
            /* Initially hidden */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            border: 2px solid #333;
        }

        /* Close button */
        #closeForm {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
            color: #333;
        }

        #closeForm:hover {
            color: red;
            font-size: 30px;
        }

        /* Form elements */
        form {
            display: flex;
            flex-direction: column;
        }

        input,
        textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
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
        <div id="addContent">
            <button id="addBtn">+</button>
        </div>
    </div>

    <!-- Add Content Form -->
    <div id="addForm">
        <span id="closeForm">&times;</span> <!-- Close Button -->
        <form method="POST" action="toDB.php">
            <input id="addTitle" type="text" name="contentTitle" placeholder="Enter Title">
            <textarea name="text" id="text" placeholder="Enter Text"></textarea>
            <input type="submit" value="Add Content">
        </form>
    </div>

    <script>
        // Get elements
        const addBtn = document.getElementById("addBtn");
        const addForm = document.getElementById("addForm");
        const closeForm = document.getElementById("closeForm");

        // Show form when clicking "Add" button
        addBtn.addEventListener("click", () => {
            addForm.style.display = "block";
        });

        // Hide form when clicking "X"
        closeForm.addEventListener("click", () => {
            addForm.style.display = "none";
        });

        // Hide form when clicking outside the form
        window.addEventListener("click", (e) => {
            if (e.target === addForm) {
                addForm.style.display = "none";
            }
        });
    </script>

</body>

</html>