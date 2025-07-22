<?php 
    if (!isset($_GET['id'])) {
        header("Location: index.php");
        exit;
    }

    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM home WHERE id='$id'");
    $data = mysqli_fetch_assoc($result);

    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo "<script>
                    alert('Slogan Berhasil Diubah');
                    window.location.href='index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Slogan Gagal Diubah');
                  </script>";
        }
    }
?>

<div class="container my-5">
    <h3 class="mb-4 text-white">Edit Slogan</h3>

    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="gambarlama" value="<?= $data['gambar_slogan'] ?>">

        <div class="mb-3">
            <label for="judul_slogan" class="form-label">Judul Slogan</label>
            <input type="text" class="form-control" id="judul_slogan" name="judul_slogan" value="<?= $data['judul_slogan'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="isi_slogan" class="form-label">Isi Slogan</label>
            <textarea class="form-control" id="isi_slogan" name="isi_slogan" rows="4" required><?= $data['isi_slogan'] ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Lama</label><br>
            <img src="../assets/img/slogan/<?= $data['gambar_slogan'] ?>" alt="Gambar Slogan" class="img-thumbnail mb-2" width="200">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Upload Gambar Baru</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" name="ubah" class="btn btn-primary">
                <i class="bi bi-check-circle"></i> Simpan Perubahan
            </button>
            <a href="index.php" class="btn btn-secondary">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional: Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
