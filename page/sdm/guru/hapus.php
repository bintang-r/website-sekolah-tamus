<?php 
	use App\Helpers\Core;

	Core::init();
	Core::AUTH(); // Kalau perlu
	
	if(!isset($_GET['id'])) {
		echo "<script>
			alert('Data berhasil dihapus.');
			window.location.href = '" . '?page=sdm' . "';
		</script>";
		exit;
	}

	$id = $_GET['id'];

	if(isset($_GET['id'])) {
		global $conn;
		$sql = mysqli_query($conn, "delete from guru where id='$id' ");
			echo "<script>
			alert('Data berhasil dihapus.');
			window.location.href = '" . '?page=sdm' . "';
		</script>";
		exit;
	}

?>