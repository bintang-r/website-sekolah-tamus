<?php 
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['ubah'])) {
    if (ubahkelas($_POST) > 0) {
        echo "<script>
            alert('Siswa Berhasil Diubah');
            window.location.href='index.php?page=home';
        </script>";
    } else {
        echo "<script>
            alert('Siswa Gagal Diubah');
        </script>";
    }
}
?>

<div class="container mt-5">
    <h4 class="mb-4">Edit Siswa</h4>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $data['kelas'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $data['jumlah'] ?>" required>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary">
            <i class="bi bi-send-fill"></i> Submit
        </button>

        <a href="index.php?page=home" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </form>
</div>
