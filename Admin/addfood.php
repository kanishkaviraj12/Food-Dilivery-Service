<?php
include('../connection.php');
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // Prepare data for insertion
    $foodName = $_POST['foodName'];
    $description = $_POST['foodDescription'];
    $price = $_POST['foodPrice'];

    // File upload handling (adjust accordingly)
    $targetDir = "../uploads/"; // Directory where images will be stored
    $targetFile = $targetDir . basename($_FILES["foodImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["foodImage"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (you can adjust this limit)
    if ($_FILES["foodImage"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (you can add more formats as needed)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["foodImage"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["foodImage"]["name"])) . " has been uploaded.";
            
            // Insert data into the database
            $sql = "INSERT INTO food_items (food_name, description, price, image_path) VALUES ('$foodName', '$description', '$price', '$targetFile')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close(); // Close the database connection
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

