<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $_SESSION['users'])) {
        echo "Username already exists. Please choose a different username.";
    } else {
        $_SESSION['users'][$username] = password_hash($password, PASSWORD_DEFAULT);
        echo "Registration successful! You can now <a href='login_form.html'>login</a>.";
    }
} else {
    echo "Invalid request method.";
}
?>

