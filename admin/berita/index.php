<?php

$keyword = mysqli_real_escape_string($conn, $_GET['search'] ?? '');
$kategoriFilter = mysqli_real_escape_string($conn, $_GET['kategori'] ?? '');

$limit = 5;
$pageNow = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$pageNow = max($pageNow, 1);
$start = ($pageNow - 1) * $limit;

// FILTER
$where = "WHERE judul LIKE '%$keyword%'";
if ($kategoriFilter != '') {
    $where .= " AND berita.id_kategori='$kategoriFilter'";
}

// QUERY
$query = mysqli_query($conn, "
SELECT berita.*, kategori.nama_kategori
FROM berita 
LEFT JOIN kategori ON berita.id_kategori = kategori.id_kategori
$where
ORDER BY id_berita DESC
LIMIT $start, $limit
");

// TOTAL
$total = mysqli_query($conn, "
SELECT COUNT(*) as total 
FROM berita 
LEFT JOIN kategori ON berita.id_kategori = kategori.id_kategori
$where
");

$totalData = mysqli_fetch_assoc($total)['total'];
$totalPages = ceil($totalData / $limit);

// HIGHLIGHT
function highlight($text, $keyword)
{
    if ($keyword == '') return $text;
    return preg_replace("/($keyword)/i", "<mark>$1</mark>", $text);
}
?>

<style>
    .btn-xs {
        padding: 0.2rem 0.4rem;
        font-size: 0.75rem;
        line-height: 1.2;
        border-radius: 0.2rem;
    }

    .admin-berita-table th:last-child,
    .admin-berita-table td:last-child {
        width: 120px;
        text-align: center;
    }

    .admin-berita-table td:nth-child(3) {
        max-width: 200px;
        word-wrap: break-word;
        white-space: normal;
    }

    .btn-group .btn {
        margin-right: 2px;
    }

    .btn-group .btn:last-child {
        margin-right: 0;
    }
</style>

<div class="card shadow-sm p-3">

    <div class="d-flex justify-content-between mb-3">
        <h5>📰 Manajemen Berita</h5>
        <a href="index.php?page=tambah_berita" class="btn btn-primary btn-sm">+ Tambah</a>
    </div>

    <!-- SEARCH -->
    <form method="GET" class="mb-3 d-flex gap-2 flex-wrap">
        <input type="hidden" name="page" value="berita">

        <input type="text" name="search" id="searchInput"
            class="form-control form-control-sm"
            placeholder="Cari berita..."
            value="<?= $keyword ?>">

        <select name="kategori" id="kategoriFilter" class="form-control form-control-sm">
            <option value="">Semua Kategori</option>
            <?php
            $k = mysqli_query($conn, "SELECT * FROM kategori");
            while ($row = mysqli_fetch_assoc($k)) {
                $sel = ($kategoriFilter == $row['id_kategori']) ? 'selected' : '';
                echo "<option value='{$row['id_kategori']}' $sel>{$row['nama_kategori']}</option>";
            }
            ?>
        </select>

        <button class="btn btn-primary btn-sm">Cari</button>
    </form>

    <!-- HASIL AJAX -->
    <div id="resultArea">

        <?php if (mysqli_num_rows($query) == 0): ?>
            <div class="alert alert-warning text-center">Data tidak ditemukan</div>
        <?php else: ?>

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
                        <?php $no = $start + 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($query)): ?>
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
                                    <div class="btn-group btn-group-xs" role="group">
                                        <a href="index.php?page=edit_berita&id=<?= $row['id_berita'] ?>" class="btn btn-warning btn-xs">Edit</a>
                                        <a href="index.php?page=hapus_berita&id=<?= $row['id_berita'] ?>"
                                            onclick="return confirm('Hapus?')"
                                            class="btn btn-danger btn-xs">Hapus</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- PAGINATION -->
            <ul class="pagination justify-content-center mt-3">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= ($i == $pageNow) ? 'active' : '' ?>">
                        <a class="page-link"
                            href="index.php?page=berita&p=<?= $i ?>&search=<?= $keyword ?>&kategori=<?= $kategoriFilter ?>">
                            <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>

        <?php endif; ?>

    </div>
</div>

<!-- AJAX LIVE SEARCH -->
<script>
    let timer;

    document.getElementById("searchInput").addEventListener("keyup", function() {
        clearTimeout(timer);
        timer = setTimeout(loadData, 400);
    });

    document.getElementById("kategoriFilter").addEventListener("change", loadData);

    function loadData() {
        let keyword = document.getElementById("searchInput").value;
        let kategori = document.getElementById("kategoriFilter").value;

        let xhr = new XMLHttpRequest();
        xhr.open("GET", "berita/ajax_search.php?search=" + keyword + "&kategori=" + kategori, true);

        xhr.onload = function() {
            document.getElementById("resultArea").innerHTML = this.responseText;
        }

        xhr.send();
    }
</script>