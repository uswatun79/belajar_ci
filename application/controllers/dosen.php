<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class dosen extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('dosen_model');
    }

    public function index()
    {
        $data['dsn'] = $this->dosen_model->getAlldosen();  
      //  print_r($data['dsn'] );
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');

    }

    public function detail($id)
    {
        $data['judul'] = 'Detail dosen';
        $data['dsn'] = $this->dosen_model->getdosenById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if($this->dosen_model->tambahDatadosen($_POST) > 0) {
           $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil disimpan..</div>");
            redirect('dosen');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal disimpan..</div>");
            redirect('dosen');
        }
    }

    public function hapus($id)
    {
        if( $this->dosen_model->hapusDatadosen($id)) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil dihapus..</div>");
            redirect('dosen');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal dihapus..</div>");
            redirect('dosen');
        }
    }

    public function getubah()
    {
        echo json_encode($this->dosen_model->getdosenById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->dosen_model->ubahDatadosen($_POST) > 0 ) {
            $this->session->set_flashdata("msg", "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Berhasil diubah..</div>");
            redirect('dosen');
        } else {
            $this->session->set_flashdata("msg", "<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses</strong> Data Gagal diubah..</div>");
            redirect('dosen');
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar dosen';
        $data['dsn'] = $this->dosen_model->cariDatadosen($_POST['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

}