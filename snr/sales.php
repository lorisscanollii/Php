<?php
require 'includes/auth.php';
require 'includes/db.php';

$sales = $pdo->query("
    SELECT sales.*, products.name 
    FROM sales 
    JOIN products ON sales.product_id = products.id 
    ORDER BY sold_at DESC
")->fetchAll();
?>

<h2>Sold Products</h2>
<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Sold At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sales as $sale): ?>
            <tr>
                <td><?= htmlspecialchars($sale['name']) ?></td>
                <td><?= $sale['quantity'] ?></td>
                <td><?= $sale['sold_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
