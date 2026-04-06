<?php
include "../../includes/koneksi.php";

$keyword = mysqli_real_escape_string($conn, $_GET['search'] ?? '');
$kategori = mysqli_real_escape_string($conn, $_GET['kategori'] ?? '');

// FILTER
$where = "WHERE judul LIKE '%$keyword%'";

if ($kategori != '') {
    $where .= " AND berita.id_kategori='$kategori'";
}

// QUERY
$query = mysqli_query($conn, "
SELECT berita.*, kategori.nama_kategori
FROM berita
LEFT JOIN kategori ON berita.id_kategori = kategori.id_kategori
$where
ORDER BY id_berita DESC
");

// HIGHLIGHT]
function highlight($text, $keyword)
{
    if ($keyword == '') return $text;
    return preg_replace("/($keyword)/i", "<mark>$1</mark>", $text);
}

// CEK DATA
if (mysqli_num_rows($query) == 0) {
    echo "<div class='alert alert-warning text-center'>Data tidak ditemukan</div>";
    exit;
}
?>

<div class="table-responsive">
    <table class="table table-hover align-middle">

        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Pembuat</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($query)):
            ?>

                <tr>

                    <td><?= $no++ ?></td>

                    <td>
                        <?php
                        $gambar = $row['gambar'];
                        $path = __DIR__ . "/../../assets/img/" . $gambar;

                        if (empty($gambar) || !file_exists($path)) {
                            $gambar = "default.png";
                        }
                        ?>
                        <img src="/web_berita/assets/img/<?= $gambar ?>" width="60" class="rounded">
                    </td>

                    <td><?= highlight($row['judul'], $keyword) ?></td>

                    <td><?= $row['penulis'] ?? 'Admin' ?></td>

                    <td><?= $row['nama_kategori'] ?></td>

                    <td>
                        <a href="index.php?page=edit_berita&id=<?= $row['id_berita'] ?>" class="btn btn-warning btn-sm">Edit</a>

                        <a href="index.php?page=hapus_berita&id=<?= $row['id_berita'] ?>"
                            onclick="return confirm('Hapus?')"
                            class="btn btn-danger btn-sm">Hapus</a>
                    </td>

                </tr>

            <?php endwhile; ?>

        </tbody>
    </table>
</div>