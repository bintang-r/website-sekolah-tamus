<div class="container mt-4">
  <h4 class="mb-3">Tambah Eskul</h4>
  <form action="" method="post" class="d-flex align-items-center gap-2">
    <input type="text" name="eskul" class="form-control" placeholder="Nama Eskul" required>
    <button type="submit" name="tambah" class="btn btn-primary">
      <i class="bi bi-plus-lg"></i> Tambah
    </button>
    <a href="index.php?page=profil" class="btn btn-secondary">
      <i class="bi bi-arrow-left"></i> Kembali
    </a>
  </form>
</div>

<?php 
if (isset($_POST['tambah'])) {
    $eskul = trim($_POST['eskul']);
    if ($eskul === "") {
        echo "<script>alert('Eskul tidak boleh kosong');</script>";
    } else {
        if (tambaheskul($_POST) > 0) {
            echo "<script>
                    alert('Eskul Berhasil Ditambahkan');
                    window.location.href='index.php?page=profil';
                  </script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Eskul');</script>";
        }
    }
}
?>
