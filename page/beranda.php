<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Daftar Slogan</h4>
        <a href="?page=home&aksi=tambahslogan" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Slogan
        </a>
    </div>

    <div class="row g-4">
        <?php 
        $query = mysqli_query($conn, "SELECT * FROM home");
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="../assets/img/slogan/<?= $data['gambar_slogan'] ?>" class="card-img-top" alt="Slogan" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['judul_slogan'] ?></h5>
                    <p class="card-text"><?= $data['isi_slogan'] ?></p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="?page=home&aksi=editslogan&id=<?= $data['id'] ?>" class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <a href="?page=home&aksi=hapusslogan&id=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus slogan ini?');">
                        <i class="bi bi-trash"></i> Hapus
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
