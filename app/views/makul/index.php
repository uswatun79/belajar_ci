<div class="container mt-3">
    
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Data Makul
      </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/makul/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari makul.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
      <div class="col-lg-6">
        <h3>Data Mata Kuliah</h3>
        <ul class="list-group">
          <?php foreach( $data['mkl'] as $mkl ) : ?>
            <li class="list-group-item">
                <?= $mkl['makul_kode']; ?> - <?= $mkl['makul_nama']; ?>  - <?= $mkl['makul_sks']; ?> sks
                <a href="javascript:;" onclick="confirmation('Penghapusan Data','Data yg telah dihapus tidak dapat dikembalikan lagi!','<?php echo BASEURL; ?>/makul/hapus/<?= $mkl['id']; ?>')" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                <a href="<?= BASEURL; ?>/makul/ubah/<?= $mkl['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mkl['id']; ?>">ubah</a>
                <a href="<?= BASEURL; ?>/makul/detail/<?= $mkl['id']; ?>" class="badge badge-primary float-right">detail</a>
            </li>
          <?php endforeach; ?>
        </ul>      
      </div>
  </div>

  <!-- Modal Tambah / Edit Data-->
  <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">Tambah Data Makul</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>          
        <form action="<?= BASEURL; ?>/makul/tambah" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="makul_kode">Kode Makul</label>
              <input type="text" class="form-control" id="makul_kode" name="makul_kode" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label for="makul_nama">Nama Makul</label>
              <input type="text" class="form-control" id="makul_nama" name="makul_nama" autocomplete="off">
            </div>

            <div class="form-group">
              <label for="makul_sks">SKS Makul</label>
              <input type="number" class="form-control" id="makul_sks" name="makul_sks" placeholder="sks makul">
            </div>
          </div>
          <div class="modal-footer pull-left">
              <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary mr-auto">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>



