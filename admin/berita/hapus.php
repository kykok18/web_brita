<?php
$id = mysqli_real_escape_string($conn, $_GET['id']);

// ambil data
$data = mysqli_fetch_assoc(mysqli_query($conn, "
SELECT * FROM berita WHERE id_berita='$id'
"));

// hapus file gambar
$file = __DIR__ . "/../../assets/img/" . $data['gambar'];
if (file_exists($file)) {
    unlink($file);
}

// hapus database
mysqli_query($conn, "DELETE FROM berita WHERE id_berita='$id'");

// redirect
header("Location: index.php?page=berita");
