<?php
include "koneksi.php";

// ambil kategori
$kategori = mysqli_query($conn, "SELECT * FROM kategori");

// ambil trending
$trending = mysqli_query($conn, "SELECT * FROM berita ORDER BY views DESC LIMIT 4");

// cek session admin
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$is_admin = isset($_SESSION['admin']);
?>

<style>
    /* NAVBAR UTAMA */
    .navbar-custom {
        background: #0f172a;
        /* dark blue */
        position: sticky;
        top: 0;
        z-index: 999;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    /* BRAND */
    .navbar-brand {
        font-weight: bold;
        font-size: 22px;
        color: #60a5fa !important;
    }

    /* MENU LINK */
    .nav-link-custom {
        color: #e5e7eb !important;
        margin-right: 15px;
        font-size: 14px;
        text-decoration: none;
        transition: 0.2s;
    }

    .nav-link-custom:hover {
        color: #60a5fa !important;
    }

    /* SEARCH */
    .search-box {
        max-width: 300px;
    }

    .search-box input {
        border-radius: 20px;
        border: none;
        padding: 6px 12px;
    }

    /* BUTTON LOGIN */
    .btn-login {
        border: 1px solid #60a5fa;
        color: #60a5fa;
        border-radius: 20px;
        padding: 5px 15px;
        transition: 0.2s;
    }

    .btn-login:hover {
        background: #60a5fa;
        color: white;
    }

    .btn-admin {
        background: #dc2626;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 5px 15px;
        transition: 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-admin:hover {
        background: #b91c1c;
        color: white;
        text-decoration: none;
    }

    /* TRENDING BAR */
    .trending-bar {
        background: #1e293b;
        font-size: 13px;
        padding: 6px 0;
    }

    .trending-bar span {
        color: #f97316;
        font-weight: bold;
        margin-right: 10px;
    }

    .trending-bar a {
        color: #cbd5f5;
        margin-right: 15px;
        text-decoration: none;
    }

    .trending-bar a:hover {
        color: #60a5fa;
    }

    /* MOBILE */
    @media(max-width:768px) {
        .nav-link-custom {
            display: inline-block;
            margin: 5px;
            font-size: 13px;
        }

        .search-box {
            width: 100%;
            margin-top: 10px;
        }
    }
</style>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom px-3">

    <!-- LOGO -->
    <a class="navbar-brand" href="index.php">BeritaKita</a>

    <!-- MENU -->
    <div class="collapse navbar-collapse show">

        <!-- KATEGORI DINAMIS -->
        <div class="me-auto">
            <a href="index.php" class="nav-link-custom">Home</a>

            <?php while ($k = mysqli_fetch_assoc($kategori)): ?>
                <a href="index.php?kategori=<?= $k['id_kategori'] ?>" class="nav-link-custom">
                    <?= $k['nama_kategori'] ?>
                </a>
            <?php endwhile; ?>
        </div>

        <!-- SEARCH -->
        <form method="GET" action="index.php" class="d-flex search-box me-3">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Cari berita...">
        </form>

        <!-- LOGIN / ADMIN DASHBOARD -->
        <?php if ($is_admin): ?>
            <a href="admin/index.php" class="btn btn-admin btn-sm">Admin Panel</a>
        <?php else: ?>
            <a href="login/login.php" class="btn btn-login btn-sm">Masuk</a>
        <?php endif; ?>

    </div>

</nav>

<!-- TRENDING -->
<div class="trending-bar px-3">
    <span>🔥 Trending</span>

    <?php while ($t = mysqli_fetch_assoc($trending)): ?>
        <a href="detail.php?id=<?= $t['id_berita'] ?>">
            <?= $t['judul'] ?>
        </a>
    <?php endwhile; ?>
</div>