<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Here, you would typically validate the input and check against a database
    // For simplicity, let's just check if the username is "admin" and password is "adminpass" for admin,
    // and "user" and "userpass" for a user

    if ($username === "admin" && $password === "adminpass") {
        // Successful admin login
        echo "<script>alert('Admin login successful!');</script>";
    } elseif ($username === "user" && $password === "userpass") {
        // Successful user login
        echo "<script>alert('User login successful!');</script>";
    } else {
        // Failed login
        echo "<script>alert('Invalid username or password.');</script>";
    }
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
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

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
