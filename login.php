<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["emailaddress"];
    $password = $_POST["password"];

    // Validate user input (sanitize, prevent SQL injection, etc.)

    // Fetch user data from the database
    $sql = "SELECT * FROM register WHERE Eaddress = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Check if the user is an admin
        if ($user['is_admin'] == 1) {
            // Admin login - verify password (assuming stored as plain text for this example)
            if ($password === $user['pass']) {
                // Password matches, admin login successful
                echo "<script>alert('Admin Login successful!');</script>";
                header("Location: adminloggedfood.html"); // Redirect to admin dashboard
                exit();
            } else {
                echo "<script>alert('Incorrect email or password for admin.');</script>";
            }
        } else {
            // Regular user login - verify password (assuming stored as plain text for this example)
            if ($password === $user['pass']) {
                // Password matches, user login successful
                echo "<script>alert('User Login successful!');</script>";
                header("Location: loggedfood.html"); // Redirect to user dashboard
                exit();
            } else {
                echo "<script>alert('Incorrect email or password for user.');</script>";
            }
        }
    } else {
        echo "<script>alert('User not found.');</script>";
    }

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d9f2ee;
        }

        .login-container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
        }

        .login-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .login-container button {
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

<div class="login-container">
    <h2>Login</h2>
    <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="Emaill address">Email Address:</label>
        <input type="text" id="username" name="emailaddress" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <p>Are you new? 
            <a href="register.php">Sign Up Here!</a></p>
        </p>

        <button type="submit">Login</button>
    </form>
</div>

<script>
    // Client-side validation using JavaScript
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Basic validation to ensure fields are not empty
        if (username.trim() === "" || password.trim() === "") {
            alert("Please enter both username and password.");
            event.preventDefault(); // Prevent form submission
        }
    });
</script>

</body>
</html>
