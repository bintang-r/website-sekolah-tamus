<?php 
	if(!isset($_GET['id'])) {
		header("location: index.php");
		exit;
	}

	$id = $_GET['id'];
	$result = mysqli_query($conn, "SELECT * FROM guru WHERE id='$id'");
	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubahguru($_POST) > 0) {
			echo "<script>
				alert('Guru Berhasil Diubah');
				window.location.href='index.php?page=sdm';
			</script>";
		} else {
			echo "<script>alert('Guru Gagal Diubah');</script>";
		}
	}
?>

<div class="container mt-5">

	<h3>Edit Guru</h3>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $data['id'] ?>">
		<input type="hidden" name="fotolama" value="<?= $data['foto'] ?>">

		<div class="mb-3">
			<label for="guru" class="form-label">Nama Guru</label>
			<input type="text" name="guru" class="form-control" id="guru" value="<?= $data['guru'] ?>" required>
		</div>

		<div class="mb-3">
			<label class="form-label">Foto Saat Ini</label><br>
			<img src="../assets/img/guru/<?= $data['foto'] ?>" alt="Foto Guru" width="120" class="img-thumbnail mb-2">
		</div>

		<div class="mb-3">
			<label for="foto" class="form-label">Update Foto</label>
			<input type="file" name="foto" class="form-control" id="foto">
		</div>

		<button type="submit" name="ubah" class="btn btn-primary">Simpan Perubahan</button>
		<a href="index.php?page=sdm" class="btn btn-secondary">Kembali</a>
	</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

