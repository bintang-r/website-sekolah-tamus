<div class="container mt-4">
  <h4 class="mb-4">Tambah Guru</h4>

  <form action="" method="post" enctype="multipart/form-data">
    
    <!-- Nama Guru -->
    <div class="mb-3">
      <label for="guru" class="form-label">Nama Guru</label>
      <input type="text" class="form-control" id="guru" name="guru" required>
    </div>

    <!-- Upload Foto -->
    <div class="mb-3">
      <label for="foto" class="form-label">Foto Guru</label>
      <input class="form-control" type="file" id="foto" name="foto" accept="image/*" required>
    </div>

    <!-- Tombol Submit -->
    <button type="submit" name="tambah" class="btn btn-primary">
      Tambah <i class="bi bi-send ms-2"></i>
    </button>

    <!-- Tombol Kembali -->
    <a href="index.php?page=sdm" class="btn btn-secondary ms-2">
      <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
  </form>
</div>

<?php 
  if (isset($_POST['tambah'])) {
    if (tambahguru($_POST) > 0) {
      echo "<script>
              alert('Guru Berhasil Ditambahkan');
              window.location.href='index.php?page=sdm';
            </script>";
    }
  }
?>
