<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}

require("connect.php"); // Include your database connection code

// Handle removing items from the cart
if (isset($_POST['remove_from_cart'])) {
    $itemIdToRemove = $_POST['item_id_to_remove'];
    
    // Perform the deletion of the item from the cart
    $deleteSql = "DELETE FROM user_cart WHERE id = :item_id AND username = :username";
    $deleteStatement = $pdo->prepare($deleteSql);
    $deleteStatement->bindParam(":item_id", $itemIdToRemove, PDO::PARAM_INT);
    $deleteStatement->bindParam(":username", $_SESSION['username'], PDO::PARAM_STR);
    $deleteStatement->execute();
    
    // Redirect back to this page to refresh the cart
    header("Location: cart-user.php");
    exit;
}

// Retrieve cart items for the logged-in user
$username = $_SESSION['username'];
$sql = "SELECT * FROM user_cart WHERE username = :username";
$statement = $pdo->prepare($sql);
$statement->bindParam(":username", $username, PDO::PARAM_STR);
$statement->execute();
$cartItems = $statement->fetchAll(PDO::FETCH_ASSOC);

// Initialize a variable to store the total price
$totalPrice = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <table>
        <thead>
            <tr>
                <th>Game Name</th>
                <th>Price</th>
                <th>Action</th> <!-- Add a column for the Remove button -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><?php echo $item['game_name']; ?></td>
                    <td>$<?php echo $item['price']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="item_id_to_remove" value="<?php echo $item['id']; ?>">
                            <button type="submit" name="remove_from_cart">Remove</button>
                        </form>
                    </td>
                </tr>
                <?php
                // Add the price of the current item to the total
                $totalPrice += $item['price'];
                ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Total Price: $<?php echo number_format($totalPrice, 2); ?></p>
    <a href="checkout.php">Proceed to Checkout</a>
    <a href="home.php">Or Return to Home Page</a>
</body>
</html>
