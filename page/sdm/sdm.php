<div class="container mt-5">
    <ul class="nav nav-tabs" id="sdmTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="guru-tab" data-bs-toggle="tab" data-bs-target="#guru" type="button" role="tab" aria-controls="guru" aria-selected="true">
                Guru
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="staf-tab" data-bs-toggle="tab" data-bs-target="#staf" type="button" role="tab" aria-controls="staf" aria-selected="false">
                Staf & Karyawan
            </button>
        </li>
    </ul>
    <div class="tab-content p-3 border border-top-0" id="sdmTabContent">

        <!-- Tab Guru -->
        <div class="tab-pane fade show active" id="guru" role="tabpanel" aria-labelledby="guru-tab">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="text-primary">Daftar Guru</h5>
                <a href="?page=sdm&aksi=tambahguru" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-1"></i>Tambah Guru
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle table-hover">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Guru</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $query = mysqli_query($conn, "SELECT * FROM guru");
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center">
                                <img src="../assets/img/guru/<?= $data['foto'] ?>" width="70" height="70" class="rounded-circle object-fit-cover">
                            </td>
                            <td><?= $data['guru'] ?></td>
                            <td class="text-center">
                                <a href="?page=sdm&aksi=editguru&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <a href="?page=sdm&aksi=hapusguru&id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus guru ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab Staf -->
        <div class="tab-pane fade" id="staf" role="tabpanel" aria-labelledby="staf-tab">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="text-danger">Daftar Staf & Karyawan</h5>
                <a href="?page=sdm&aksi=tambahstaf" class="btn btn-danger">
                    <i class="bi bi-plus-lg me-1"></i>Tambah Staf
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle table-hover">
                    <thead class="table-danger text-center">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Staf</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $query = mysqli_query($conn, "SELECT * FROM staf");
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center">
                                <img src="../assets/img/staf/<?= $data['foto'] ?>" width="70" height="70" class="rounded-circle object-fit-cover">
                            </td>
                            <td><?= $data['staf'] ?></td>
                            <td class="text-center">
                                <a href="?page=sdm&aksi=editstaf&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <a href="?page=sdm&aksi=hapusstaf&id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus staf ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
