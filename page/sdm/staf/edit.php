<?php
if (!isset($_GET['id'])) {
    header("location: index.php");
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM staf WHERE id='$id'");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['ubah'])) {
    if (ubahstaf($_POST) > 0) {
        echo "<script>
                alert('Staf Berhasil Diubah');
                window.location.href='index.php?page=sdm';
              </script>";
    } else {
        echo "<script>
                alert('Staf Gagal Diubah');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staf</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h4 class="mb-4">Edit Staf</h4>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="fotolama" value="<?= $data['foto'] ?>">

        <div class="mb-3">
            <label for="staf" class="form-label">Nama Staf</label>
            <input type="text" class="form-control" id="staf" name="staf" value="<?= $data['staf'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Update Foto</label>
            <input class="form-control" type="file" name="foto" id="foto">
            <div class="mt-2">
                <img src="../assets/img/staf/<?= $data['foto'] ?>" width="100" alt="Foto Staf" class="img-thumbnail">
            </div>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary">
            <i class="bi bi-save"></i> Edit
        </button>
        <a href="index.php?page=sdm" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </form>
</div>

<!-- Bootstrap JS & Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
