<!-- Container Header -->
<div class="container-fluid">
    <div class="page-title-box">
        <h4 class="mb-0">Sambutan Kepala Sekolah</h4>
    </div>
</div>

<?php 
$query = mysqli_query($conn, "SELECT * FROM kepsek");
$data = mysqli_fetch_assoc($query);
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body d-flex">
                    <img src="../assets/img/kepalasekolah/<?php echo $data['foto_kepsek'] ?>" alt="Kepsek" width="100" class="me-4 rounded-circle">
                    <div>
                        <h5 class="card-title"><?= $data['nama'] ?></h5>
                        <p class="card-text"><?= $data['sambutan'] ?></p>
                        <a href="?page=home&aksi=editkepsek&id=<?= $data['id'] ?>" class="btn btn-primary btn-sm">
                            <i class="mdi mdi-pencil"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Berita -->
<div class="container-fluid">
    <div class="page-title-box d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-primary">Berita</h4>
        <a href="?page=home&aksi=tambahberita" class="btn btn-success btn-sm">
            <i class="mdi mdi-plus"></i> Tambah Berita
        </a>
    </div>

    <?php 
    $query = mysqli_query($conn, "SELECT * FROM berita");
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body d-flex">
                    <img src="../assets/img/berita/<?php echo $data['gambar'] ?>" width="100" class="me-4 rounded">
                    <div>
                        <h5 class="card-title"><?= $data['judul_berita'] ?></h5>
                        <p class="card-text"><?= $data['isi_berita'] ?></p>
                        <a href="?page=home&aksi=editberita&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm me-1">
                            <i class="mdi mdi-pencil"></i> Edit
                        </a>
                        <a href="?page=home&aksi=hapusberita&id=<?= $data['id'] ?>" class="btn btn-danger btn-sm">
                            <i class="mdi mdi-delete"></i> Hapus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<!-- Siswa -->
<div class="container-fluid">
    <div class="page-title-box">
        <h4 class="mb-0 text-dark">Siswa</h4>
    </div>

    <?php 
    $query = mysqli_query($conn, "SELECT * FROM siswa");
    $total = 0;
    while ($data = mysqli_fetch_assoc($query)) {
        $total += $data['jumlah'];
    ?>
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['kelas'] ?></h5>
                    <h3 class="card-text"><?= $data['jumlah'] ?></h3>
                    <a href="?page=home&aksi=editsiswa&id=<?= $data['id'] ?>" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-pencil"></i> Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="row">
        <div class="col-xl-8">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Seluruh Siswa</h5>
                    <h3 class="card-text"><?= $total ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
