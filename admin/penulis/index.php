<?php
include "../../includes/koneksi.php";

// CRUD PENULIS
if (isset($_POST['tambah'])) {
    $nama_penulis = $_POST['nama_penulis'];
    mysqli_query($conn, "INSERT INTO penulis (nama_penulis) VALUES ('$nama_penulis')");
    header("Location: index.php?page=penulis");
    exit;
}

if (isset($_POST['edit'])) {
    $id_penulis = $_POST['id_penulis'];
    $nama_penulis = $_POST['nama_penulis'];
    mysqli_query($conn, "UPDATE penulis SET nama_penulis='$nama_penulis' WHERE id_penulis='$id_penulis'");
    header("Location: index.php?page=penulis");
    exit;
}

if (isset($_GET['hapus'])) {
    $id_penulis = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM penulis WHERE id_penulis='$id_penulis'");
    header("Location: index.php?page=penulis");
    exit;
}

// AMBIL DATA
$query = mysqli_query($conn, "SELECT * FROM penulis ORDER BY id_penulis DESC");
?>

<div class="card shadow-sm p-3">
    <div class="d-flex justify-content-between mb-3">
        <h5>👤 Manajemen Penulis</h5>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahModal">+ Tambah</button>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nama_penulis'] ?></td>
                        <td>
                            <button class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id_penulis'] ?>">Edit</button>
                            <a href="?page=penulis&hapus=<?= $row['id_penulis'] ?>" onclick="return confirm('Hapus penulis ini?')" class="btn btn-danger btn-xs">Hapus</a>
                        </td>
                    </tr>

                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="editModal<?= $row['id_penulis'] ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Penulis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form method="POST">
                                    <div class="modal-body">
                                        <input type="hidden" name="id_penulis" value="<?= $row['id_penulis'] ?>">
                                        <input type="text" name="nama_penulis" class="form-control" value="<?= $row['nama_penulis'] ?>" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="tambahModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Penulis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <input type="text" name="nama_penulis" class="form-control" placeholder="Nama Penulis" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .btn-xs {
        padding: 0.2rem 0.4rem;
        font-size: 0.75rem;
        line-height: 1.2;
        border-radius: 0.2rem;
    }
</style>