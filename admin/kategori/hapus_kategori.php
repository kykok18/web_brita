<?php
$id = mysqli_real_escape_string($conn, $_GET['id']);

// SET NULL DULU (backup kalau FK belum aktif)
mysqli_query($conn, "
UPDATE berita SET id_kategori=NULL WHERE id_kategori='$id'
");

// HAPUS KATEGORI
mysqli_query($conn, "
DELETE FROM kategori WHERE id_kategori='$id'
");

header("Location: index.php?page=kategori");
