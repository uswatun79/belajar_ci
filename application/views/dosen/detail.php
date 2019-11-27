<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $dsn->nama_dosen; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?=  $dsn->matakuliah; ?></h6>
        <p class="card-text"><?= $dsn->hari; ?></p>
        <p class="card-text"><?= $dsn->no_telpon; ?></p>
        <a href="<?php echo base_url();?>dosen" class="card-link">Kembali</a>
      </div>
    </div>

</div>