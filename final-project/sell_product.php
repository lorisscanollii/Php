<?php
require 'includes/auth.php';
require 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = (int) $_POST['quantity'];

    // Decrease product stock
    $update = $pdo->prepare("UPDATE products SET quantity = quantity - ? WHERE id = ? AND quantity >= ?");
    $update->execute([$quantity, $product_id, $quantity]);

    // Record sale
    if ($update->rowCount() > 0) {
        $sale = $pdo->prepare("INSERT INTO sales (product_id, quantity) VALUES (?, ?)");
        $sale->execute([$product_id, $quantity]);
        $message = "Sale recorded!";
    } else {
        $error = "Not enough stock or invalid product.";
    }

    header("Location: dashboard.php");
    exit;
}
?>
