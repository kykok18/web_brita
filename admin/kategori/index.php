<?php

$keyword = mysqli_real_escape_string($conn, $_GET['search'] ?? '');

$limit = 5;
$page = $_GET['p'] ?? 1;
$page = max($page, 1);
$start = ($page - 1) * $limit;

// QUERY
$query = mysqli_query($conn, "
SELECT * FROM kategori
WHERE nama_kategori LIKE '%$keyword%'
ORDER BY id_kategori DESC
LIMIT $start, $limit
");

// TOTAL
$total = mysqli_query($conn, "
SELECT COUNT(*) as total FROM kategori
WHERE nama_kategori LIKE '%$keyword%'
");

$totalData = mysqli_fetch_assoc($total)['total'];
$totalPages = ceil($totalData / $limit);
?>

<div class="card shadow-sm p-3">

    <div class="d-flex justify-content-between mb-3">
        <h5>📂 Manajemen Kategori</h5>
        <a href="index.php?page=tambah_kategori" class="btn btn-primary btn-sm">+ Tambah</a>
    </div>

    <form method="GET" class="mb-3 d-flex gap-2">
        <input type="hidden" name="page" value="kategori">
        <input type="text" name="search" class="form-control form-control-sm"
            placeholder="Cari kategori..." value="<?= $keyword ?>">
        <button class="btn btn-primary btn-sm">Cari</button>
    </form>

    <div class="table-responsive">
        <table class="table table-hover align-middle">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = $start + 1; ?>
                <?php while ($row = mysqli_fetch_assoc($query)): ?>
                    <tr>

                        <td><?= $no++ ?></td>
                        <td><?= $row['nama_kategori'] ?></td>

                        <td>
                            <a href="index.php?page=edit_kategori&id=<?= $row['id_kategori'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="index.php?page=hapus_kategori&id=<?= $row['id_kategori'] ?>"
                                onclick="return confirm('Hapus kategori?')"
                                class="btn btn-danger btn-sm">Hapus</a>
                        </td>

                    </tr>
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>

    <!-- PAGINATION -->
    <ul class="pagination justify-content-center">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                <a class="page-link" href="index.php?page=kategori&p=<?= $i ?>&search=<?= $keyword ?>">
                    <?= $i ?>
                </a>
            </li>
        <?php endfor; ?>
    </ul>

</div>