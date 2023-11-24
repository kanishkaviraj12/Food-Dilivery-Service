<?php
include('../connection.php');

session_start(); // Start the session to get userID if using sessions

// Check if userID is set in the session
if (isset($_SESSION['userid'])) {
    $userID = $_SESSION['userid']; // Retrieve userID from the session

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepare data for update
        $foodName = $_POST['foodName'];
        $description = $_POST['foodDescription'];
        $price = $_POST['foodPrice'];

        // File upload handling (adjust accordingly)
        $targetDir = "../uploads/"; // Directory where images will be stored
        $uploadOk = 1;

        // Check if a file is selected for upload
        if (!empty($_FILES["foodImage"]["name"])) {
            $targetFile = $targetDir . basename($_FILES["foodImage"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["foodImage"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            if ($_FILES["foodImage"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["foodImage"]["tmp_name"], $targetFile)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["foodImage"]["name"])) . " has been uploaded.";

                    // Update data in the database
                    $sql = "UPDATE food_items SET food_name='$foodName', description='$description', price='$price', image_path='$targetFile' WHERE user_id='$userID'";

                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            // Handling for the case when no file is uploaded but other data needs to be updated
            $sql = "UPDATE food_items SET food_name='$foodName', description='$description', price='$price' WHERE user_id='$userID'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }

        $conn->close(); // Close the database connection
    } else {
        echo "Invalid request method.";
    }
} else {
    echo "User session not found or userID is not set.";
}
?>





<html>
<head>
    <title>Add New Food Item</title>
    <link rel="stylesheet" href="addfood.css">
</head>
<body>

<!-- Add Food Modal -->
<div id="addFoodModal" class="modal">
    <div class="modal-content">
        <!-- <span class="close">&times;</span> -->
        <h2>Add New Food</h2>
        <form id="addFoodForm" action="" method="post" enctype="multipart/form-data">

            <label for="userid">Userid:</label>
            <input type="text" id="foodName" name="userid"><br><br>

            <label for="foodName">Food Name:</label>
            <input type="text" id="foodName" name="foodName"><br><br>

            <label for="foodDescription">Description:</label><br>
            <textarea id="foodDescription" name="foodDescription" rows="4" cols="50"></textarea><br><br>

            <label for="foodPrice">Price:</label>
            <input type="text" id="foodPrice" name="foodPrice"><br><br>

            <label for="foodImage">Upload Image:</label>
            <input type="file" id="foodImage" name="foodImage"><br><br>

            <input type="submit" value="Add Food">
        </form>
    </div>
</div>
</body>
</html>