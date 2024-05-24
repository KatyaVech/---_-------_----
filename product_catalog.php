<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Catalog</title>
    <link rel="stylesheet" href="product_catalog.css">
</head>
<body>
    <h2>Product Catalog</h2>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>No products available.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $product): ?>
                <li><?php echo htmlspecialchars($product['name']) . " - $" . htmlspecialchars($product['price']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <p><a href="index.php">Go Back</a></p>
</body>
</html>
