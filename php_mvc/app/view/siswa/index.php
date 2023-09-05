<body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <?php Flasher::flash(); ?>
        </div>
      </div>
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Siswa</button>
                <h3>Data Siswa</h3>
                    <ul class="list-group">
                        <?php foreach ($data['siswa'] as $siswa) : ?>
                          <li class="list-group-item">
                    <?= $siswa['nama']; ?>
                    <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-danger float-end m-1"
                        onclick="return confirm('Yakin Ingin Menghapus?');">Hapus</a>
                    <a href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>"
                        class="btn btn-success float-end m-1 tampilModeUbah" data-bs-toggle="modal"
                        data-bs-target="#formModal" data-id="<?= $siswa['id'] ?>">Ubah</a>
                        <!-- <input type="hidden" name="id" id="id"> -->
                    <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>"
                        class="btn btn-primary float-end m-1">Detail</a>
                </li>
                        <?php endforeach; ?>
                    </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASE_URL; ?>/siswa/tambah" method="post">
            <div class="form-group">
                <label for="nama" class="mb-1 ms-1">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin" class="mt-2 mb-1 ms-1">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat" class="mt-2 mb-1 ms-1">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>/.
    </div>
  </div>
</div>
</body>