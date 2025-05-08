<?php
include 'config.php'; // This includes your database connection

// Handle form submission to insert new product
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];

    // Insert product into the database
    try {
        $stmt = $conn->prepare("INSERT INTO products (title, price, description, quantity) 
                                VALUES (:title, :price, :description, :quantity)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->execute();
    } catch (PDOException $e) {
        die("Error inserting product: " . $e->getMessage());
    }
}

// Handle delete product
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    try {
        $stmt = $conn->prepare("DELETE FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        die("Error deleting product: " . $e->getMessage());
    }
}

// Handle edit product
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_product'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];

    // Update product in the database
    try {
        $stmt = $conn->prepare("UPDATE products SET title = :title, price = :price, description = :description, quantity = :quantity WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->execute();
    } catch (PDOException $e) {
        die("Error editing product: " . $e->getMessage());
    }
}

// Fetch products from the database
try {
    $stmt = $conn->prepare("SELECT * FROM products");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

// If editing a product, pre-fill the form with its data
$editProduct = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    try {
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $editProduct = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Error fetching product: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add New Product</h2>
    
    <!-- Form to Add or Edit Product -->
    <form method="POST" action="">
        <?php if ($editProduct): ?>
            <input type="hidden" name="id" value="<?= $editProduct['id'] ?>">
            <h3>Edit Product</h3>
        <?php else: ?>
            <h3>Add New Product</h3>
        <?php endif; ?>

        <div class="mb-3">
            <label for="title" class="form-label">Product Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $editProduct['title'] ?? '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= $editProduct['price'] ?? '' ?>" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?= $editProduct['description'] ?? '' ?></textarea>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $editProduct['quantity'] ?? '' ?>" required>
        </div>
        <?php if ($editProduct): ?>
            <button type="submit" name="edit_product" class="btn btn-warning">Save Changes</button>
        <?php else: ?>
            <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
        <?php endif; ?>
    </form>

    <hr>

    <!-- Product Table -->
    <h2 class="mt-5">Product List</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price ($)</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($products): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['id']) ?></td>
                    <td><?= htmlspecialchars($product['title']) ?></td>
                    <td><?= htmlspecialchars($product['price']) ?></td>
                    <td><?= htmlspecialchars($product['description']) ?></td>
                    <td><?= htmlspecialchars($product['quantity']) ?></td>
                    <td>
                        <!-- Edit and Delete Buttons -->
                        <a href="?edit=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?delete=<?= $product['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6" class="text-center">No products found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
