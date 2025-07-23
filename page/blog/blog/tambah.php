<?php 
  if(isset($_POST['tambah'])) {
    if(tambahblog($_POST) > 0) {
      echo "<script>
              alert('Blog Berhasil Ditambahkan');
              window.location.href='index.php?page=blog';
            </script>";
    }
  }
?>

<div class="container mt-5">

  <h3 class="mb-4">Tambah Blog</h3>

  <form action="" method="post" enctype="multipart/form-data" class="card p-4 shadow-sm">
    
    <div class="mb-3">
      <label for="judul_blog" class="form-label">Judul Blog</label>
      <input type="text" class="form-control" id="judul_blog" name="judul_blog" required>
    </div>

    <div class="mb-3">
      <label for="isi_blog" class="form-label">Isi Blog</label>
      <textarea class="form-control" id="isi_blog" name="isi_blog" rows="5" required></textarea>
    </div>

    <div class="mb-3">
      <label for="gambar" class="form-label">Upload Gambar</label>
      <input class="form-control" type="file" id="gambar" name="gambar" required>
    </div>

    <div class="d-flex justify-content-between">
      <button type="submit" name="tambah" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah
      </button>
      <a href="index.php?page=blog" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
      </a>
    </div>

  </form>
</div>
