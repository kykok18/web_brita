<?php
include "includes/koneksi.php";
include "includes/header.php";
include "includes/navbar.php";

// FILTER
$keyword = mysqli_real_escape_string($conn, $_GET['search'] ?? '');
$kategoriFilter = mysqli_real_escape_string($conn, $_GET['kategori'] ?? '');

// HERO
$hero = mysqli_query($conn, "
SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1
");
$heroData = mysqli_fetch_assoc($hero);

// SIDE
$side = mysqli_query($conn, "
SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,3
");

// TRENDING
$trending = mysqli_query($conn, "
SELECT * FROM berita ORDER BY views DESC LIMIT 4
");

// WHERE FILTER
$where = "WHERE judul LIKE '%$keyword%'";
if ($kategoriFilter != '') {
    $where .= " AND id_kategori='$kategoriFilter'";
}

// GRID
$limit = 6;
$page = $_GET['p'] ?? 1;
$page = max($page, 1);
$start = ($page - 1) * $limit;

$grid = mysqli_query($conn, "
SELECT * FROM berita
$where
ORDER BY id_berita DESC
LIMIT $start,$limit
");

// TOTAL
$total = mysqli_query($conn, "
SELECT COUNT(*) as total FROM berita $where
");
$totalData = mysqli_fetch_assoc($total)['total'];
$totalPages = ceil($totalData / $limit);

// FUNCTION GAMBAR
function gambar($file)
{
    $path = __DIR__ . "/assets/img/" . $file;
    if (empty($file) || !file_exists($path)) {
        return "default.png";
    }
    return $file;
}
?>

<style>
    body {
        background: #f4f6f9;
    }

    /* HERO */
    .hero {
        position: relative;
    }

    .hero img {
        height: 350px;
        object-fit: cover;
        border-radius: 12px;
    }

    .hero-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 15px;
        color: white;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        border-radius: 0 0 12px 12px;
    }

    /* SIDE */
    .side img {
        width: 110px;
        height: 90px;
        object-fit: cover;
        border-radius: 8px;
    }

    /* GRID */
    .card img {
        height: 160px;
        object-fit: cover;
    }

    /* CARD */
    .card {
        border: none;
        border-radius: 12px;
    }

    /* TRENDING */
    .trending a {
        text-decoration: none;
        color: #333;
    }

    .trending a:hover {
        color: #0d6efd;
    }
</style>

<div class="container mt-3">

    <!-- HERO -->
    <div class="row mb-4">

        <div class="col-md-8 hero">

            <a href="detail.php?id=<?= $heroData['id_berita'] ?>">
                <img src="assets/img/<?= gambar($heroData['gambar']) ?>" class="w-100">
            </a>

            <div class="hero-overlay">
                <h5><?= $heroData['judul'] ?></h5>
            </div>

        </div>

        <!-- SIDE -->
        <div class="col-md-4 side">
            <?php while ($s = mysqli_fetch_assoc($side)): ?>
                <div class="mb-3 d-flex gap-2">

                    <a href="detail.php?id=<?= $s['id_berita'] ?>">
                        <img src="assets/img/<?= gambar($s['gambar']) ?>">
                    </a>

                    <a href="detail.php?id=<?= $s['id_berita'] ?>" class="fw-bold text-dark small">
                        <?= $s['judul'] ?>
                    </a>

                </div>
            <?php endwhile; ?>
        </div>

    </div>

    <div class="row">

        <!-- GRID -->
        <div class="col-md-8">

            <div class="row">
                <?php if (mysqli_num_rows($grid) == 0): ?>
                    <div class="alert alert-warning text-center">
                        Data tidak ditemukan
                    </div>
                <?php endif; ?>

                <?php while ($g = mysqli_fetch_assoc($grid)): ?>
                    <div class="col-md-6 mb-3">

                        <div class="card shadow-sm">

                            <a href="detail.php?id=<?= $g['id_berita'] ?>">
                                <img src="assets/img/<?= gambar($g['gambar']) ?>" class="card-img-top">
                            </a>

                            <div class="card-body p-2">
                                <div class="fw-semibold small">
                                    <?= $g['judul'] ?>
                                </div>
                            </div>

                        </div>

                    </div>
                <?php endwhile; ?>
            </div>

            <!-- PAGINATION -->
            <ul class="pagination justify-content-center mt-3">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                        <a class="page-link"
                            href="?p=<?= $i ?>&search=<?= $keyword ?>&kategori=<?= $kategoriFilter ?>">
                            <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>

        </div>

        <!-- TRENDING -->
        <div class="col-md-4">

            <div class="card shadow-sm p-3 trending">

                <h6 class="fw-bold">🔥 Trending</h6>

                <?php while ($t = mysqli_fetch_assoc($trending)): ?>
                    <div class="mb-2">
                        <a href="detail.php?id=<?= $t['id_berita'] ?>">
                            <?= $t['judul'] ?>
                        </a>
                        <br>
                        <small class="text-muted"><?= $t['views'] ?> views</small>
                    </div>
                <?php endwhile; ?>

            </div>

        </div>

    </div>

</div>

<?php include "includes/footer.php"; ?>