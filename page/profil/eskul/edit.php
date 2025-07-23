<?php 
	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "SELECT * FROM eskul WHERE id='$id'");
	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubaheskul($_POST) > 0) {
			echo "<script>
					alert('Eskul Berhasil Diubah');
					window.location.href='index.php?page=profil';
				  </script>";
		} else {
			echo "<script>alert('Eskul Gagal Diubah');</script>";
		}
	}
?>

<div class="container mt-4">
	<h4 class="mb-4">Edit Eskul</h4>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $data['id'] ?>">
		<div class="row mb-3">
			<div class="col-md-12">
				<label for="eskul" class="form-label">Isi</label>
				<input type="text" class="form-control" id="eskul" name="eskul" value="<?= htmlspecialchars($data['eskul']) ?>">
			</div>
		</div>
		<div class="d-flex gap-2">
			<button type="submit" name="ubah" class="btn btn-primary">Edit <i class="bi bi-send ms-1"></i></button>
			<a href="index.php?page=profil" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
		</div>
	</form>
</div>
