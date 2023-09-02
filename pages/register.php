<?php
require("connect.php");

$errors = []; // Initialize an array to store validation errors

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Check if required fields are empty
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    }

    // If there are no validation errors, proceed with database insertion
    if (empty($errors)) {
        $sql = "INSERT INTO users (USERNAME, PASSWORD, EMAIL) VALUES (:username, :password, :email)";
        $statement = $pdo->prepare($sql);
        
        // Hash the password using bcrypt
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $statement->bindParam(":username", $username, PDO::PARAM_STR);
        $statement->bindParam(":password", $hashedPassword, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        
        if ($statement->execute()) {
            // Registration successful
            echo "New user is added successfully. You can now login";
            header("Location: login.php");
            exit(); // Terminate script to ensure immediate redirection
        } else {
            // Registration failed
            echo "An error occurred during registration.";
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/png" href="../images/LOGGO.PNG">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('../images/slider-bg-2.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .register-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-box {
            background-color: white;
            border: 1px solid #ddd;
            padding: 20px;
            width: 90%; /* Responsive width */
            max-width: 400px; /* Set maximum width */
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .register-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .register-box label {
            display: block;
            margin-bottom: 10px;
        }

        .register-box input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .register-box button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #222;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .register-box button:hover {
            background-color: #111;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .register-form {
                flex-direction: column;
            }

            .register-box {
                width: 100%; /* Full width on smaller screens */
                margin: 10px; /* Add some spacing */
            }
        }
    </style>
</head>
<body>
    <div class="register-form">
        <div class="register-box">
            <h2>Register</h2>
            <form method="post" action="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password">
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>

