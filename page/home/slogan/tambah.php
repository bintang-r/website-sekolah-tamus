
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0 text-white">Tambah Slogan</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="judul_slogan" class="form-label">Judul Slogan</label>
                    <input type="text" class="form-control" id="judul_slogan" name="judul_slogan" required>
                </div>

                <div class="mb-3">
                    <label for="isi_slogan" class="form-label">Isi Slogan</label>
                    <textarea class="form-control" id="isi_slogan" name="isi_slogan" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
                    <button type="submit" name="tambah" class="btn btn-primary">
                        <i class="bi bi-send-fill"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php 
    if (isset($_POST['tambah'])) {
        if (tambah($_POST) > 0) {
            echo "<script>
                alert('Slogan Berhasil Ditambahkan');
                window.location.href='index.php';
            </script>";
        }
    }
    ?>
</div>

<!-- Bootstrap JS (opsional, untuk komponen interaktif) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

