<?php
session_start();

$user = "admin";
$pass = "12345";

if ($_POST['username'] == $user && $_POST['password'] == $pass) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $user;
    header("Location: index.php");
} else {
    echo "<script>
        alert('Login gagal');
        window.location='login.php';
    </script>";
}
