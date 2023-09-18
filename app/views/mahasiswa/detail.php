<div class="row">
    <div class="col-lg-5">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Detail Mahasiswa</li>
            <li class="list-group-item">Nama : <?= $data['nama'] ?></li>
            <li class="list-group-item">Email : <?= $data['email'] ?></li>
            <li class="list-group-item">Jurusan : <?= $data['jurusan'] ?></li>
        </ul>
        <a href="<?= BASEURL ?>/mahasiswa" class="btn btn-primary mt-2">Kembali</a>
    </div>
</div>