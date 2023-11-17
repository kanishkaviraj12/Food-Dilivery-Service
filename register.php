<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Fullname = $_POST["fname"];
    $Address = $_POST["address"];
    $Email = $_POST["email"];
    $Telephone_Number = $_POST["nb"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    // Validation - Check if passwords match before inserting into the database
    if ($newPassword === $confirmPassword) {
        $sql = "INSERT INTO register (fname, address, Eaddress, tp, pass, cpass) VALUES ('$Fullname', '$Address', '$Email', '$Telephone_Number', '$newPassword', '$confirmPassword')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Passwords do not match. Please try again.');</script>";
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d9f2ee;
        }

        .registration-container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .registration-container label {
            display: block;
            margin-bottom: 8px;
        }

        .registration-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            
        }

        .registration-container button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <h2>Registration</h2>
    <form id="registrationForm" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="new_fname">Full Name:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="new_address">Address:</label>             
        <textarea id="address" name="address" rows="5" cols="38" required></textarea>

        <label for="new_email">Email Adress:</label>
        <input type="text" id="email" name="email" required>

        <label for="new_number">Mobile Number:</label>
        <input type="text" id="nb" name="nb" required>

        <label for="new_password">Password:</label>
        <input type="password" id="new_password" name="new_password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <p>Are you already registed? 
            <a href="login.php">Sign In Here!</a></p>
        </p>

        <button type="submit">Register</button>
    </form>
</div>

<script>
    // Client-side validation using JavaScript
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        var newPassword = document.getElementById("new_password").value;
        var confirmPassword = document.getElementById("confirm_password").value;

        // Basic validation to ensure passwords match
        if (newPassword !== confirmPassword) {
            alert("Passwords do not match. Please try again.");
            event.preventDefault(); // Prevent form submission
        }
    });
</script>

</body>
</html>

