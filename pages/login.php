<?php

session_start();
require("connect.php");

if (isset($_POST['login'])) {
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $statement = $pdo->prepare($sql);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $statement->bindParam(":username", $username, PDO::PARAM_STR);
    $statement->bindParam(":password", $password, PDO::PARAM_STR);
    $statement->execute();

    $count = $statement->rowCount();
    if ($count == 1) {
        $_SESSION['privilleged'] = $username;
        
      $_SESSION['username'] = $username;

        header("Location: home.php");
        exit; // Make sure to exit to prevent further code execution
    } else {
        $errorMessage = "Invalid username or password";
    }
    
    $pdo = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="icon" type="image/png" href="../images/LOGGO.PNG">
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: url('../images/slider-bg-1.jpg') no-repeat center center fixed;
    background-size: cover;
  }

  .login-form {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .login-box {
    background-color: white;
    border: 1px solid #ddd;
    padding: 20px;
    width: 100%;
    max-width: 300px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .login-box h2 {
    margin-bottom: 20px;
    font-size: 24px;
  }

  .login-box label {
    display: block;
    margin-bottom: 10px;
  }

  .login-box input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  .login-box button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #222;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  .back-button {
    display: block;
    margin-top: 20px; /* Adjust the margin as needed */
    text-align: center;
  }

  /* Additional styles for the "Back" button, you can customize these */
  .back-button a {
    text-decoration: none;
    background-color: #222;
    color: #FFFFFF;
    padding: 10px 20px;
    border-radius: 3px;
    transition: background-color 0.2s;
  }

  .back-button a:hover {
    background-color: #ddd;
  }

  .login-box button:hover {
    background-color: #ddd;
  }

  /* Responsive adjustments */
  @media screen and (max-width: 768px) {
    .login-form {
      padding: 20px;
    }

    .login-box {
      max-width: none;
    }
    
  }
</style>
</head>
<body>
  <div class="login-form">
    <div class="login-box">
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <button type="submit" name="login">Login</button>
        <h3>Not Registered? <a href="register.php">Register Here</a></h3>
      </form>
      <?php
    if (isset($errorMessage)) {
        echo "<p>$errorMessage</p>";
    }
    ?>
    <div class="back-button">
        <a href="home.php">Back to Home</a>
      </div>
    </div>
  </div>
</body>
</html>


