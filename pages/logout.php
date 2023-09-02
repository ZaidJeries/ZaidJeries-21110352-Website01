<?php
session_start(); // Start the session if not already started

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: login.php");
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
        <p>You have been successfully logged out. <a href="home.php">Return to Home</a></p>
    <?php else: ?>
        <p>You are not logged in. <a href="home.php">Return to Home</a></p>
    <?php endif; ?>
</body>
</html>
