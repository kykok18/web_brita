<?php
if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);

    mysqli_query($conn, "INSERT INTO kategori (nama_kategori) VALUES ('$nama')");

    header("Location: index.php?page=kategori");
    exit;
}
?>

<div class="card p-3 shadow-sm">
    <h5>+ Tambah Kategori</h5>

    <form method="POST">
        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama kategori" required>

        <button name="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" onclick="history.back()">Kembali</button>
    </form>
</div>