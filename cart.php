<?php
session_start();
if (!isset($_SESSION['loggedin_user'])) {
    echo "You must be logged in to view your cart. Please <a href='login_form.html'>login</a> or <a href='register_form.html'>register</a>.";
    exit();
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
</head>
<body>
    <h2>Your Cart</h2>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li><?php echo htmlspecialchars($item['name']) . " - $" . htmlspecialchars($item['price']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <p><a href="index.php">Go Back</a></p>
</body>
</html>
