<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Pegawai extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Pegawai_model');
    }

    public function index()
    {
        $data['pgw'] = $this->Pegawai_model->getAllPegawai();  
       //print_r($data['pegawai']);
       
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');

    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if($this->Pegawai_model->tambahDataPegawai($_POST) > 0) {
           $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil disimpan..</div>");
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal disimpan..</div>");
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        if( $this->Pegawai_model->hapusDataPegawai($id)) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil dihapus..</div>");
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal dihapus..</div>");
            redirect('mahasiswa');
        }
    }

    public function getubah()
    {
        echo json_encode($this->Pegawai_model->getPegawaiById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->Pegawai_model->ubahDataPegawai($_POST) > 0 ) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil diubah..</div>");
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal diubah..</div>");
            redirect('mahasiswa');
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Pegawai';
        $data['pegawai'] = $this->Pegawai_model->cariDataPegawai($_POST['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

}