<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin@gmail.com' && $password == 'admin') {
        $_SESSION['username'] = $username;
        header('location:home.php');
    } else {
        $_SESSION['gagal'] = '';
        header('location:index.php');
    }
}
