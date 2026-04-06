<?php
$id = mysqli_real_escape_string($conn, $_GET['id']);

$data = mysqli_fetch_assoc(mysqli_query($conn, "
SELECT * FROM berita WHERE id_berita='$id'
"));

if (isset($_POST['submit'])) {

    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if ($gambar != '') {

        $old = __DIR__ . "/../../assets/img/" . $data['gambar'];
        if (file_exists($old)) {
            unlink($old);
        }

        move_uploaded_file($tmp, __DIR__ . "/../../assets/img/" . $gambar);

        mysqli_query($conn, "UPDATE berita SET
            judul='$judul',
            isi='$isi',
            id_kategori='$kategori',
            penulis='$penulis',
            gambar='$gambar'
            WHERE id_berita='$id'
        ");
    } else {

        mysqli_query($conn, "UPDATE berita SET
            judul='$judul',
            isi='$isi',
            id_kategori='$kategori',
            penulis='$penulis'
            WHERE id_berita='$id'
        ");
    }

    header("Location: index.php?page=berita");
}
?>

<div class="card p-3 shadow-sm">
    <h5>Edit Berita</h5>

    <form method="POST" enctype="multipart/form-data">

        <input type="text" name="judul" value="<?= $data['judul'] ?>" class="form-control mb-2">

        <select name="kategori" class="form-control mb-2">
            <?php
            $k = mysqli_query($conn, "SELECT * FROM kategori");
            while ($row = mysqli_fetch_assoc($k)) {
                $sel = ($row['id_kategori'] == $data['id_kategori']) ? 'selected' : '';
                echo "<option value='{$row['id_kategori']}' $sel>{$row['nama_kategori']}</option>";
            }
            ?>
        </select>

        <input type="text" name="penulis" class="form-control mb-2" placeholder="Nama Penulis" value="<?= $data['penulis'] ?? '' ?>">

        <img src="/web_berita/assets/img/<?= $data['gambar'] ?>" width="80" class="mb-2">

        <input type="file" name="gambar" class="form-control mb-2">

        <textarea name="isi" class="form-control mb-2"><?= $data['isi'] ?></textarea>

        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Kembali</button>

    </form>
</div>