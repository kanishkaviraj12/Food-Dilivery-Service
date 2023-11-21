<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["message"];

    $sql = "INSERT INTO contact (name, email, msg) VALUES ('$name', '$email', '$msg')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Send Message successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="conus.css">
</head>
<body>
  <div class="container">
    <h1>Contact Us</h1>
    <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea><br><br><br>
    
    <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
