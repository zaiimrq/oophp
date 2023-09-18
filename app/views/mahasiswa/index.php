<div class="row">
    <div class="col-lg-5">
        <?php Flasher::flash(); ?>
    </div>
</div>
<div class="row">
    <h1 class="h1">DAFTAR MAHASISWA</h1>
    <div class="col-lg-5 mt-3">
        <a class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModal">Tambah data</a>
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




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>