<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
	
	public function index()
	{	
		//Memanggil method getAllMahasiswa() yang pada class Mahasiswa_model (lihat file model/Mahasiswa_model.php)
		$datamhs = $this->Mahasiswa_model->getAllMahasiswa();
		//$datamhs->num_rows() digunakan untuk mengetahui jumlah row/baris data dari hasil eksekusi query pada fungsi getAllMahasiswa()
		//kondisi jumlah row data lebih besar/sama dengan 1
		if($datamhs->num_rows() >= 1){
			//fungsi datamhs->result() ini mengembalikan hasil query sebagai array object,
			//$data['mhs'] berfungsi untuk menampung data hasil query kedalam sebuah elemen array bernama mhs
			$data['mhs'] = $datamhs->result();
		}
		//Controller memanggil view data_mahasiswa (folder view/data_mahasisw.php)
		//$data merupakan sebuh array yang didalamnya terdapat elemen berisi data hasil query dari tabel mahasiswa
		//isi data array $data dapat digunakan pada file view/data_mahasisw.php
		$this->load->view('data_mahasiswa', $data);
	}
}