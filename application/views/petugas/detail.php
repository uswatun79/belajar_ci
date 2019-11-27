<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $ptg->nama; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?=  $ptg->alamat; ?></h6>
        <p class="card-text"><?= $ptg->bidang; ?></p>
        <a href="<?php echo base_url();?>petugas" class="card-link">Kembali</a>
      </div>
    </div>

</div>