<?php
$id = $_GET['id'] ?? null;
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM kepsek WHERE id='$id'"));
?>

<form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  <input type="hidden" name="fotolama" value="<?= $data['foto_kepsek'] ?>">

  <div class="row">
    <div class="input-field col s12">
      <input id="nama" name="nama" type="text" value="<?= $data['nama'] ?>" required>
      <label for="nama">Nama</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <textarea id="sambutan" name="sambutan" class="materialize-textarea" required><?= $data['sambutan'] ?></textarea>
      <label for="sambutan">Sambutan</label>
    </div>
  </div>

  <div class="row">
    <div class="file-field input-field">
      <div class="btn blue">
        <span>Update Gambar</span>
        <input type="file" name="foto">
      </div>
      <img src="../assets/img/kepalasekolah/<?= $data['foto_kepsek'] ?>" width="15%">
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  </div>

  <button class="btn waves-effect waves-light" type="submit" name="ubah">Submit
    <i class="material-icons right">send</i>
  </button>
</form>

<?php
if (isset($_POST['ubah'])) {
  if (ubahkepsek($_POST) > 0) {
    echo "<script>alert('Kepala Sekolah berhasil diubah'); location.href='index.php?page=home';</script>";
  }
}
?>
