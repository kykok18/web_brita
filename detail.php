<?php
include "includes/koneksi.php";
include "includes/navbar.php";

// ambil id
$id = mysqli_real_escape_string($conn, $_GET['id'] ?? 0);

// ambil data berita + kategori + penulis
$data = mysqli_query($conn, "
SELECT berita.*, kategori.nama_kategori
FROM berita 
LEFT JOIN kategori ON berita.id_kategori = kategori.id_kategori
WHERE id_berita='$id'
");

$berita = mysqli_fetch_assoc($data);

// update views
mysqli_query($conn, "UPDATE berita SET views = views + 1 WHERE id_berita='$id'");

// berita terkait (kategori sama)
$related = mysqli_query($conn, "
SELECT * FROM berita 
WHERE id_kategori='{$berita['id_kategori']}' 
AND id_berita != '$id'
LIMIT 4
");

// trending
$trending = mysqli_query($conn, "
SELECT * FROM berita ORDER BY views DESC LIMIT 4
");

// function gambar
function gambar($file)
{
    $path = __DIR__ . "/assets/img/" . $file;
    if (empty($file) || !file_exists($path)) {
        return "default.png";
    }
    return $file;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title><?= $berita['judul'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }

        .detail-img {
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
        }

        .content {
            background: white;
            padding: 20px;
            border-radius: 12px;
        }

        .meta {
            font-size: 13px;
            color: #6b7280;
        }

        .related img {
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .related a {
            text-decoration: none;
            color: #111;
            font-size: 14px;
        }

        .related a:hover {
            color: #2563eb;
        }

        .trending-box a {
            text-decoration: none;
            color: #111;
            font-size: 14px;
        }

        .trending-box a:hover {
            color: #2563eb;
        }
    </style>
</head>

<body>

    <div class="container mt-4">

        <div class="row">

            <!-- DETAIL -->
            <div class="col-md-8">

                <div class="content shadow-sm">

                    <img src="assets/img/<?= gambar($berita['gambar']) ?>" class="w-100 detail-img mb-3">

                    <h3 class="fw-bold"><?= $berita['judul'] ?></h3>

                    <div class="meta mb-3">
                        Ditulis oleh <b><?= $berita['penulis'] ?? 'Admin' ?></b> |
                        <?= $berita['nama_kategori'] ?> |
                        <?= date('d M Y', strtotime($berita['tanggal'])) ?> |
                        👁 <?= $berita['views'] ?> views
                    </div>

                    <div style="line-height:1.8;">
                        <?= nl2br($berita['isi']) ?>
                    </div>

                </div>

                <!-- RELATED -->
                <div class="content shadow-sm mt-4 related">

                    <h5>📰 Berita Terkait</h5>

                    <?php while ($r = mysqli_fetch_assoc($related)): ?>
                        <div class="d-flex gap-2 mb-3">

                            <img src="assets/img/<?= gambar($r['gambar']) ?>" width="120">

                            <div>
                                <a href="detail.php?id=<?= $r['id_berita'] ?>">
                                    <?= $r['judul'] ?>
                                </a>
                            </div>

                        </div>
                    <?php endwhile; ?>

                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="col-md-4">

                <div class="content shadow-sm trending-box">

                    <h5>🔥 Trending</h5>

                    <?php while ($t = mysqli_fetch_assoc($trending)): ?>
                        <div class="mb-2">
                            <a href="detail.php?id=<?= $t['id_berita'] ?>">
                                <?= $t['judul'] ?>
                            </a>
                            <br>
                            <small><?= $t['views'] ?> views</small>
                        </div>
                    <?php endwhile; ?>

                </div>

            </div>

        </div>

    </div>

    <?php include "includes/footer.php"; ?>

</body>

</html>