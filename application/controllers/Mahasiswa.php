<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['mhs'] = $this->Mahasiswa_model->getAllMahasiswa();  
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');

    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if($this->Mahasiswa_model->tambahDataMahasiswa($_POST) > 0) {
           $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil disimpan..</div>");
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal disimpan..</div>");
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        if( $this->Mahasiswa_model->hapusDataMahasiswa($id)) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil dihapus..</div>");
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal dihapus..</div>");
            redirect('mahasiswa');
        }
    }

    public function getubah()
    {
        echo json_encode($this->Mahasiswa_model->getMahasiswaById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->Mahasiswa_model->ubahDataMahasiswa($_POST) > 0 ) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil diubah..</div>");
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal diubah..</div>");
            redirect('mahasiswa');
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->Mahasiswa_model->cariDataMahasiswa($_POST['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

}