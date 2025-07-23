<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "select * from blog where id='$id' ");

	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubahblog($_POST) > 0) {
			echo "<script>
							alert ('Blog Berhasil Diubah');
							window.location.href='index.php?page=blog';
					  </script>
					  ";
		}else{
			echo "<script>
						alert ('Blog Gagal Diubah');
					  </script>
					  ";
		}
	}

?>
<div class="container">
  <h4>Edit Blog</h4><br><br>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <input type="hidden" name="gambarlama" value="<?=$data['gambar']?>">
    <div class="row">
      <div class="input-field col s12">
        <input id="judul_blog" name="judul_blog" type="text" value="<?=$data['judul_blog'] ?>">
        <label for="judul_blog">Judul Blog</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea1" name="isi_blog" class="materialize-textarea"><?=$data['isi_blog'] ?></textarea>
        <label for="textarea1">Isi Blog</label>
      </div>
    </div>
    <div class="row">
      <div class="file-field input-field">
        <div class="btn blue">
          <span>Update Gambar</span>
          <input type="file" name="gambar">
        </div>
        <img src="../assets/img/blog/<?php echo $data['gambar'] ?>" width="15%">
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
        </div>
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="ubah">Edit
      <i class="material-icons right">send</i>
    </button>
    <a href="index.php?page=blog" class="btn waves-effect waves-light">
      <i class="material-icons left">fast_rewind</i>Kembali
    </a>
  </form>
</div> tolong rapikan dan mengguna boot'


