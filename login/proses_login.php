<?php
session_start();
include "../includes/koneksi.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = md5($_POST['password']);
$captcha_input = $_POST['captcha'];

// ================= CAPTCHA =================
if ($captcha_input !== $_SESSION['captcha']) {
    header("Location: login.php?error=1");
    exit;
}

// ================= LOGIN =================
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if ($data) {

    // ADMIN
    if ($data['role'] == 'admin') {
        $_SESSION['admin'] = $data['name'];
        $_SESSION['id_user'] = $data['id_user'];

        header("Location: ../admin/index.php"); // arahkan ke dashboard admin
    }

    // USER
    else if ($data['role'] == 'user') {
        $_SESSION['user'] = $data['name'];
        $_SESSION['id_user'] = $data['id_user'];

        header("Location: ../index.php"); // arahkan ke frontend
    }
} else {
    header("Location: login.php?error=1");
}
