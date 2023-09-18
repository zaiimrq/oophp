<div class="row">
    <h1 class="h1">DAFTAR MAHASISWA</h1>
    <div class="col-lg-5 mt-3">
        <a class="btn btn-primary mb-2" href="<?= BASEURL ?>/mahasiswa/tambah">Tambah data</a>
        <?php $i = 1 ?>
        <?php foreach ($data['mhs'] as $mhs) : ?>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="ms-1 me-auto">
                        <?= $i++ ?>. <?= $mhs['nama'] ?>
                    </div>    
                    <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['username'] ?>" class="badge bg-primary ms-2 text-decoration-none">detail</a>
                    <span class="badge bg-warning ms-2">edit</span>
                    <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['username'] ?>" class="badge bg-danger ms-2 text-decoration-none">hapus</a>
            </li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>