<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php echo $this->session->flashdata("msg"); ?>  
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data dosen 
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?php echo base_url();?>/dosen/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari nama dosen.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-6">
          <h3>Daftar Nama Dosen</h3>
          <ul class="list-group">
            <?php foreach($dsn as $value ) : ?>
              <li class="list-group-item">
                  <?= $value->nama_dosen; ?>
                  <a href="<?php echo base_url();?>dosen/hapus/<?= $value->id; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?php echo base_url();?>dosen/ubah/<?php echo $value->id; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $value->id; ?>">ubah</a>
                  <a href="<?php echo base_url();?>dosen/detail/<?= $value->id; ?>" class="badge badge-primary float-right">detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?php echo base_url();?>/dosen/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama_dosen">Nama</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="matakuliah">Mata Kuliah</label>
            <input type="text" class="form-control" id="matakuliah" name="matakuliah" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="hari">Hari</label>
            <input type="hari" class="form-control" id="hari" name="hari">
          </div>

          <div class="form-group">
            <label for="no_telpon">No Telpon</label>
            <input type="text" class="form-control" id="no_telpon" name="no_telpon">
          </div>

         
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/dosen.js"></script>




