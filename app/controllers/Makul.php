<?php 
class Makul extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Makul';
        $data['mkl'] = $this->model('Makul_model')->getAllMakul();
        $this->view('templates/header', $data);
        $this->view('makul/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Makul';
        $data['mkl'] = $this->model('Makul_model')->getMakulById($id);
        $this->view('templates/header', $data);
        $this->view('makul/detail', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Makul';
        $data['mkl'] = $this->model('Makul_model')->cariDataMakul();
        $this->view('templates/header', $data);
        $this->view('makul/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Makul_model')->tambahDataMakul($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/makul');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/makul');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Makul_model')->hapusDataMakul($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/makul');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/makul');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Makul_model')->getMakulById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Makul_model')->ubahDataMakul($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/makul');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/makul');
            exit;
        } 
    }

}