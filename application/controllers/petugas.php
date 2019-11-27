<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class petugas extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('petugas_model');
    }

    public function index()
    {
        $data['ptg'] = $this->petugas_model->getAllpetugas();  
      //  print_r($data['ptg'] );
        $this->load->view('templates/header', $data);
        $this->load->view('petugas/index', $data);
        $this->load->view('templates/footer');

    }

    public function detail($id)
    {
        $data['judul'] = 'Detail petugas';
        $data['ptg'] = $this->petugas_model->getpetugasById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('petugas/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if($this->petugas_model->tambahDatapetugas($_POST) > 0) {
           $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil disimpan..</div>");
            redirect('petugas');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal disimpan..</div>");
            redirect('petugas');
        }
    }

    public function hapus($id)
    {
        if( $this->petugas_model->hapusDatapetugas($id)) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil dihapus..</div>");
            redirect('petugas');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal dihapus..</div>");
            redirect('petugas');
        }
    }

    public function getubah()
    {
        echo json_encode($this->petugas_model->getpetugasById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->petugas_model->ubahDatapetugas($_POST) > 0 ) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil diubah..</div>");
            redirect('petugas');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal diubah..</div>");
            redirect('petugas');
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar petugas';
        $data['ptg'] = $this->petugas_model->cariDatapetugas($_POST['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('petugas/index', $data);
        $this->load->view('templates/footer');
    }

}