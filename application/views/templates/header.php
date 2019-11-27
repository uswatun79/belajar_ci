<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi CRUD CI</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand" href="<?php echo base_url();?>">Code Igniter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?php echo base_url();?>mahasiswa">Data Mahasiswa</a>
          <a class="nav-item nav-link" href="<?php echo base_url();?>dosen">Data Dosen</a>
          <a class="nav-item nav-link" href="<?php echo base_url();?>petugas">Data Petugas Kampus</a>
        </div>
      </div>
  </div>
</nav>