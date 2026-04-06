<?php
$id = mysqli_real_escape_string($conn, $_GET['id']);

$data = mysqli_fetch_assoc(mysqli_query($conn, "
SELECT * FROM kategori WHERE id_kategori='$id'
"));

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);

    mysqli_query($conn, "
    UPDATE kategori SET nama_kategori='$nama'
    WHERE id_kategori='$id'
    ");

    header("Location: index.php?page=kategori");
}
?>

<div class="card p-3 shadow-sm">
    <h5>Edit Kategori</h5>

    <form method="POST">
        <input type="text" name="nama" value="<?= $data['nama_kategori'] ?>" class="form-control mb-2">

        <button name="submit" class="btn btn-warning">Update</button>
        <button type="button" class="btn btn-secondary" onclick="history.back()">Kembali</button>
    </form>
</div>