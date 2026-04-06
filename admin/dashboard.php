<?php
include "../includes/koneksi.php";

$total_berita = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM berita"));
$total_kategori = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kategori"));
$total_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users"));
?>

<style>
    /* warna utama mengikuti navbar */
    .card-dashboard {
        border-radius: 12px;
        color: white;
        transition: 0.3s;
    }

    .card-dashboard:hover {
        transform: translateY(-5px);
    }

    /* warna */
    .bg-berita {
        background: linear-gradient(135deg, #2563eb, #1e40af);
    }

    .bg-kategori {
        background: linear-gradient(135deg, #059669, #047857);
    }

    .bg-user {
        background: linear-gradient(135deg, #7c3aed, #5b21b6);
    }

    /* icon */
    .icon-box {
        font-size: 30px;
        opacity: 0.8;
    }

    /* welcome */
    .welcome-box {
        background: #1f2937;
        color: white;
        border-radius: 12px;
    }
</style>

<h4 class="mb-4 fw-bold">📊 Dashboard Admin</h4>

<!-- WELCOME -->
<div class="card welcome-box shadow-sm p-3 mb-4">
    <h5>Halo, <?= $_SESSION['admin']; ?> 👋</h5>
    <p class="mb-0">Selamat datang di panel admin portal berita.</p>
</div>

<div class="row g-4">

    <!-- BERITA -->
    <div class="col-md-4 col-sm-12">
        <div class="card card-dashboard bg-berita shadow p-3 d-flex justify-content-between">
            <div>
                <h6>Total Berita</h6>
                <h2><?= $total_berita ?></h2>
            </div>
            <div class="icon-box text-end">
                <i class="bi bi-newspaper"></i>
            </div>
        </div>
    </div>

    <!-- KATEGORI -->
    <div class="col-md-4 col-sm-12">
        <div class="card card-dashboard bg-kategori shadow p-3 d-flex justify-content-between">
            <div>
                <h6>Total Kategori</h6>
                <h2><?= $total_kategori ?></h2>
            </div>
            <div class="icon-box text-end">
                <i class="bi bi-tags"></i>
            </div>
        </div>
    </div>

    <!-- USER -->
    <div class="col-md-4 col-sm-12">
        <div class="card card-dashboard bg-user shadow p-3 d-flex justify-content-between">
            <div>
                <h6>Total User</h6>
                <h2><?= $total_user ?></h2>
            </div>
            <div class="icon-box text-end">
                <i class="bi bi-people"></i>
            </div>
        </div>
    </div>

</div>

<!-- INFO TAMBAHAN -->
<div class="card shadow-sm mt-4 p-3">
    <h6 class="fw-bold">📌 Info</h6>
    <p class="mb-0">
        Gunakan menu di atas untuk mengelola berita, kategori, dan user.
    </p>
</div>