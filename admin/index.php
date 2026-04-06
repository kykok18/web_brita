<?php
ob_start();
include "../includes/auth_admin.php";
include "../includes/koneksi.php";

$page = mysqli_real_escape_string($conn, isset($_GET['page']) ? $_GET['page'] : 'dashboard');

$allowed_pages = [
    'dashboard',
    'berita',
    'kategori',
    'tambah_berita',
    'edit_berita',
    'hapus_berita',
    'tambah_kategori',
    'edit_kategori',
    'hapus_kategori'
];
if (!in_array($page, $allowed_pages)) {
    $page = 'dashboard';
}

include "../includes/header.php";
include "../includes/navadmin.php";
?>

<main class="container mt-4">

    <?php
    switch ($page) {

        case 'dashboard':
            include "dashboard.php";
            break;

        case 'berita':
            include "berita/index.php";
            break;

        case 'kategori':
            include "kategori/index.php";
            break;
        case 'tambah_berita':
            include "berita/tambah_berita.php";
            break;

        case 'edit_berita':
            include "berita/edit.php";
            break;

        case 'hapus_berita':
            include "berita/hapus.php";
            break;

        case 'tambah_kategori':
            include "kategori/tambah_kategori.php";
            break;

        case 'edit_kategori':
            include "kategori/edit_kategori.php";
            break;

        case 'hapus_kategori':
            include "kategori/hapus_kategori.php";
            break;

        default:
            include "dashboard.php";
            break;
    }
    ?>

</main>

<?php
include "../includes/footer.php";
?>