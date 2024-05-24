<?php
session_start();

if (!isset($_SESSION['loggedin_user'])) {
    echo "You must be logged in to add products to your cart. Please <a href='login_form.html'>login</a> or <a href='register_form.html'>register</a>.";
    exit();
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];


    if (!is_numeric($product_price) || $product_price <= 0) {
        echo "<script type='text/javascript'>
                alert('Invalid product price. Please enter a positive number.');
                window.history.back();
              </script>";
        exit();
    }

    $product = array(
        "name" => $product_name,
        "price" => $product_price
    );

    $_SESSION['cart'][] = $product;

    echo "<script type='text/javascript'>
            alert('Product added to cart successfully!');
            window.location.href = 'cart.php';
          </script>";
} else {
    echo "Invalid request method.";
}
?>
