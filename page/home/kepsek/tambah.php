<?php
include 'koneksi.php';

// Cek mode: tambah atau edit
$isEdit = isset($_GET['id']);
$data = [
  'id' => '',
  'nama' => '',
  'sambutan' => '',
  'foto_kepsek' => ''
];

if ($isEdit) {
  $id = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM kepsek WHERE id='$id'");
  $data = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
  if ($isEdit) {
    if (ubahkepsek($_POST) > 0) {
      echo "<script>alert('Data berhasil diubah'); location.href='index.php?page=home';</script>";
    } else {
      echo "<script>alert('Data gagal diubah');</script>";
    }
  } else {
    if (tambahkepsek($_POST) > 0) {
      echo "<script>alert('Data berhasil ditambahkan'); location.href='index.php?page=home';</script>";
    } else {
      echo "<script>alert('Data gagal ditambahkan');</script>";
    }
  }
}
?>

<div class="container mt-4">
  <h4><?= $isEdit ? 'Edit' : 'Tambah' ?> Kepala Sekolah</h4>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <input type="hidden" name="fotolama" value="<?= $data['foto_kepsek'] ?>">

    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" required>
    </div>

    <div class="mb-3">
      <label for="sambutan" class="form-label">Sambutan</label>
      <textarea class="form-control" id="sambutan" name="sambutan" rows="4" required><?= $data['sambutan'] ?></textarea>
    </div>

    <div class="mb-3">
      <label for="foto" class="form-label">Foto</label>
      <input class="form-control" type="file" id="foto" name="foto">
      <?php if ($isEdit && $data['foto_kepsek']) : ?>
        <div class="mt-2">
          <img src="../assets/img/kepalasekolah/<?= $data['foto_kepsek'] ?>" width="120">
        </div>
      <?php endif; ?>
    </div>

    <button type="submit" name="submit" class="btn btn-primary"><?= $isEdit ? 'Update' : 'Simpan' ?></button>
    <a href="index.php?page=home" class="btn btn-secondary">Kembali</a>
  </form>
</div>
