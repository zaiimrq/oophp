<div class="row">
    <div class="col-lg-5">
        <?php Flasher::flash(); ?>
    </div>
</div>
<div class="row">
    <h1 class="h1">DAFTAR MAHASISWA</h1>
    <div class="col-lg-5 mt-3">
        <a class="btn btn-primary mb-2 tambah" data-bs-toggle="modal" data-bs-target="#formModal">Tambah data</a>
        <?php $i = 1 ?>
        <?php foreach ($data['mhs'] as $mhs) : ?>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="ms-1 me-auto">
                        <?= $i++ ?>. <?= $mhs['nama'] ?>
                    </div>    
                    <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['username'] ?>" class="badge bg-primary ms-2 text-decoration-none">detail</a>
                    <a href="" class="badge bg-warning ms-2 text-decoration-none ubah" data-bs-toggle="modal" data-bs-target="#formModal" data-username="<?= $mhs['username'] ?>">edit</a>
                    <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['username'] ?>" class="badge bg-danger ms-2 text-decoration-none" onclick="return confirm('Anda ingin menghapus data ?')">hapus</a>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post" id="form">
        <input type="hidden" id="id" name="id">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <select class="form-select" name="jurusan" id="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
          </select>
        </div>
      </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="form">Tambah Data</button>
      </div>
    </div>
  </div>
</div>