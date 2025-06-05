<?php
require 'includes/auth.php';
require 'includes/db.php';

$sales = $pdo->query("
    SELECT sales.*, products.name 
    FROM sales 
    JOIN products ON sales.product_id = products.id 
    ORDER BY sales.sold_at DESC
")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sold Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Sold Products</h2>
        <a href="dashboard.php" class="button" style="margin-bottom: 20px;">⬅ Back to Dashboard</a>

        <?php if (count($sales) === 0): ?>
            <p>No products have been sold yet.</p>
        <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity Sold</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sales as $sale): ?>
                    <tr>
                        <td data-label="Product"><?= htmlspecialchars($sale['name']) ?></td>
                        <td data-label="Quantity"><?= $sale['quantity'] ?></td>
                        <td data-label="Sold At"><?= $sale['sold_at'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</body>
</html>
