<div class="container mt-5">

    <h4 class="mb-4">Tambah Staf</h4>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="staf" class="form-label">Nama Staf</label>
            <input type="text" class="form-control" id="staf" name="staf" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Upload Foto</label>
            <input class="form-control" type="file" id="foto" name="foto" required>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary">
            Tambah <i class="bi bi-send ms-1"></i>
        </button>

        <a href="index.php?page=sdm" class="btn btn-secondary">
            <i class="bi bi-rewind me-1"></i>Kembali
        </a>
    </form>
</div>

<?php 
    if (isset($_POST['tambah'])) {
        if (tambahstaf($_POST) > 0) {
            echo "<script>
                    alert ('Guru Berhasil Ditambahkan');
                    window.location.href='index.php?page=sdm';
                  </script>";
        }
    }
?>
