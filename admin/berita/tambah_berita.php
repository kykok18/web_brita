<?php
if (isset($_POST['submit'])) {

    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if ($gambar != '') {
        move_uploaded_file($tmp, __DIR__ . "/../../assets/img/" . $gambar);
    }

    mysqli_query($conn, "INSERT INTO berita 
    (judul, isi, id_kategori, penulis, gambar, views, tanggal)
    VALUES 
    ('$judul','$isi','$kategori','$penulis','$gambar',0,NOW())");

    header("Location: index.php?page=berita");
}
?>

<div class="card p-3 shadow-sm">
    <h5>+ Tambah Berita</h5>

    <form method="POST" enctype="multipart/form-data">

        <input type="text" name="judul" class="form-control mb-2" placeholder="Judul" required>

        <select name="kategori" class="form-control mb-2" required>
            <option value="">-- Pilih Kategori --</option>
            <?php
            $k = mysqli_query($conn, "SELECT * FROM kategori");
            while ($row = mysqli_fetch_assoc($k)) {
                echo "<option value='{$row['id_kategori']}'>{$row['nama_kategori']}</option>";
            }
            ?>
        </select>

        <input type="text" name="penulis" class="form-control mb-2" placeholder="Nama Penulis" required>

        <input type="file" name="gambar" class="form-control mb-2" required>

        <textarea name="isi" class="form-control mb-2" rows="5"></textarea>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Kembali</button>

    </form>
</div>