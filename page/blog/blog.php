<div class="container mt-4 text-primary">
    <h4 class="mb-3">Blog</h4>
    <a href="?page=blog&aksi=tambahblog" class="btn btn-primary mb-4">
        <i class="bi bi-plus-lg"></i> Tambah Blog
    </a>

    <?php 
        $query = mysqli_query($conn, "SELECT * FROM blog");
        while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <img src="../assets/img/blog/<?php echo $data['gambar'] ?>" width="150" class="me-3 img-thumbnail" alt="Gambar Blog">
                    <div>
                        <h5 class="card-title"><?= htmlspecialchars($data['judul_blog']) ?></h5>
                        <p class="card-text"><?= nl2br(htmlspecialchars($data['isi_blog'])) ?></p>

                        <a href="?page=blog&aksi=editblog&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm me-2">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="?page=blog&aksi=hapusblog&id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus blog ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
