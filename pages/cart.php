<?php
require("connect.php"); // Include your database connection code

session_start(); // Start a session to store user data

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['add_to_cart'])) {
        // Get game details from the form
        $username = $_SESSION['username']; // Assuming you store the username in the session
        $game_name = $_POST['game_name'];
        $price = $_POST['price'];
        
        // Insert the game into the user's cart
        $sql = "INSERT INTO user_cart (username, game_name, price) VALUES (:username, :game_name, :price)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":username", $username, PDO::PARAM_STR);
        $statement->bindParam(":game_name", $game_name, PDO::PARAM_STR);
        $statement->bindParam(":price", $price, PDO::PARAM_STR);
        
        if ($statement->execute()) {
            echo "Game added to cart successfully.";
            header("Location: home.php");
        } else {
            echo "An error occurred while adding the game to the cart.";
        }
    }
}
?>
