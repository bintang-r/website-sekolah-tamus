<?php

	require_once '../app/Helpers/Core.php';

	use App\Helpers\Core;

	Core::AUTH();

	Core::HEADER('Beranda');
	
?>

<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<?php  

			@$page = $_GET['page'];
			@$aksi = $_GET['aksi'];

			if($page == "profil") {
				if ($aksi == "") {
					include "profil/profil.php";
				}else if($aksi == "editsejarah") {
					include "profil/sejarah/edit.php";
				}else if($aksi == "editvisimisi") {
					include "profil/visimisi/edit.php";
				}else if($aksi == "tambahsarana") {
					include "profil/saranaprasarana/tambah.php";
				}else if($aksi == "editsarana") {
					include "profil/saranaprasarana/edit.php";
				}else if($aksi == "editeskul") {
					include "profil/eskul/edit.php";
				}else if($aksi == "tambaheskul") {
					include "profil/eskul/tambah.php";
				}
			}else if($page == "") {
				include "beranda.php";
			}else if($page == "galeri") {
				if ($aksi == "") {
					include "galeri/galeri.php";
				}else if($aksi == "tambahgaleri") {
					include "galeri/gambarsekolah/tambah.php";
				}else if($aksi == "editgaleri") {
					include "galeri/gambarsekolah/edit.php";
				}else if($aksi == "hapusgaleri") {
					include "galeri/gambarsekolah/hapus.php";
				}
			}else if($page == "blog") {
				if($aksi == "") {
					include "blog/blog.php";
				}else if($aksi == "tambahblog") {
					include "blog/blog/tambah.php";
				}else if($aksi == "editblog") {
					include "blog/blog/edit.php";
				}else if($aksi == "hapusblog") {
					include "blog/blog/hapus.php";
				}
			}else if($page == "sdm") {
				if($aksi == "") {
					include "sdm/sdm.php";
				}else if($aksi == "tambahguru") {
					include "sdm/guru/tambah.php";
				}else if($aksi == "editguru") {
					include "sdm/guru/edit.php";
				}else if($aksi == "hapusguru") {
					include "sdm/guru/hapus.php";
				}else if($aksi == "tambahstaf") {
					include "sdm/staf/tambah.php";
				}else if($aksi == "editstaf") {
					include "sdm/staf/edit.php";
				}else if($aksi == "hapusstaf") {
					include "sdm/staf/hapus.php";
				}
			}else if($page == "home") {
				if($aksi == "") {
					include "home/home.php";
				}else if($aksi == "tambahslogan") {
					include "home/slogan/tambah.php";
				}else if($aksi == "hapusslogan") {
					include "home/slogan/hapus.php";
				}else if($aksi == "editslogan") {
					include "home/slogan/edit.php";
				}


				else if($aksi == "editkepsek") {
					include "home/kepsek/edit.php";
				}else if($aksi == "tambahkepsek") {
					include "home/kepsek/tambah.php";
				}


				else if($aksi == "tambahberita") {
					include "home/berita/tambah.php";
				}else if($aksi == "editberita") {
					include "home/berita/edit.php";
				}else if($aksi == "hapusberita") {
					include "home/berita/hapus.php";
				}


				else if($aksi == "editsiswa") {
					include "home/siswa/edit.php";
				}
			}

		?>
		</div>
	</div>
</div>

<script type="text/javascript" src="../assets/js/materialize.min.js"></script>

<script>
	const sideNav = document.querySelectorAll('.sidenav');
	M.Sidenav.init(sideNav);

	const slider = document.querySelectorAll('.slider');
	M.Slider.init(slider, {
		indicators: false,
		transition: 600,
		interval: 3000
	});

	const parallax = document.querySelectorAll('.parallax');
	M.Parallax.init(parallax);

	const materialbox = document.querySelectorAll('.materialboxed');
	M.Materialbox.init(materialbox);
</script>
	
<?php Core::FOOTER() ?>