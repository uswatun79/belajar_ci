<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $mhs->nama; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?=  $mhs->nrp; ?></h6>
        <p class="card-text"><?= $mhs->email; ?></p>
        <p class="card-text"><?= $mhs->jurusan; ?></p>
        <a href="<?php echo base_url();?>mahasiswa" class="card-link">Kembali</a>
      </div>
    </div>

</div>