<?php
require 'includes/auth.php';
require 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $stmt = $pdo->prepare('INSERT INTO products (name, description, price, quantity) VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $description, $price, $quantity]);

    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <h2>Add New Product</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Product Name" required>
        <textarea name="description" placeholder="Description"></textarea>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <input type="number" name="quantity" placeholder="Quantity" min="0" required>
        <button type="submit">Add Product</button>
    </form>
    <p><a href="dashboard.php">Back to Dashboard</a></p>
</body>
</html>
