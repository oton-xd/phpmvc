<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $data['siswa']['nama']; ?></h5>
        <h6 class="card-title mb-2 text-muted"><?php echo $data['siswa']['jenis_kelamin']; ?></h6>
        <p class="card-text"><?php echo $data['siswa']['alamat']; ?></p>
        <a href="<?php echo BASE_URL; ?>/siswa" class="btn btn-primary btn-sm">Kembali</a>
    </div>
    </div>
</div>