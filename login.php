<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $_SESSION['users']) && password_verify($password, $_SESSION['users'][$username])) {
        $_SESSION['loggedin_user'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password. Please <a href='login_form.html'>try again</a>.";
    }
} else {
    echo "Invalid request method.";
}
?>
