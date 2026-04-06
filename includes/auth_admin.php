<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// cek login
if (!isset($_SESSION['admin'])) {
    header("Location: ../login/login.php");
    exit;
}
