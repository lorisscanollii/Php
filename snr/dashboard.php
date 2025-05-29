<?php
require 'includes/auth.php';
require 'includes/db.php';

$stmt = $pdo->query('SELECT * FROM products');
$products = $stmt->fetchAll();

// Count total products
$countStmt = $pdo->query('SELECT COUNT(*) FROM products');
$totalProducts = $countStmt->fetchColumn();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <h2>Product Dashboard</h2>
<p style="text-align:center; font-size:1.2rem; margin-bottom: 20px;">
    You have <strong><?= $totalProducts ?></strong> product<?= $totalProducts != 1 ? 's' : '' ?> in your inventory.
</p>
    <h2>Product Dashboard</h2>
    <a href="add_product.php">Add New Product</a> | 
    <a href="logout.php">Logout</a>
    <table border ="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($products as $product): ?>
            <tr>
                <td data-label="Name"><?= htmlspecialchars($product['name']) ?></td>
                <td data-label="Description"><?= htmlspecialchars($product['description']) ?></td>
                <td data-label="Price"><?= htmlspecialchars($product['price']) ?></td>
                <td data-label="Quantity"><?= htmlspecialchars($product['quantity']) ?></td>
                <td data-label="Actions" class="actions">
                    
                <a href="edit_product.php?id=<?= $product['id'] ?>">Edit</a>
                <a href="delete_product.php?id=<?= $product['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                


            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
