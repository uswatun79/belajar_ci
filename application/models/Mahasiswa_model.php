<?php 
class Mahasiswa_model extends CI_Model{

    //membuat fungsi dengan nama getAllMahasiswa 
    public function getAllMahasiswa()
    {
        //$this->db->get('mahasiswa') => menjalakan query untuk menampilkan data dari tabel mahasiswa
        //perintah ini merupakan active record yang disediakan framework CI atau bahasa lainnya database wrapper 
        //yang dapat memperingkas penulisan query database dan tentunya sudah inlcude fitur keamanan pada metode query nya
        //jika perintah ini dijalankan akan menghasilkan query "select * from mahasiswa"
        return $this->db->get('mahasiswa');
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', array('id' => $id))->row();
    }

    public function tambahDataMahasiswa($data)
    {
        $this->db->insert('mahasiswa', $data);
        return $this->db->affected_rows();
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where("id = $id");
        return $this->db->delete('mahasiswa');;
    }


    public function ubahDataMahasiswa($data)
    {
        $this->db->where("id = '$data[id]'");
        return $this->db->update('mahasiswa', $data);
    }


    public function cariDataMahasiswa($keyword)
    {
       $this->db->where("nama LIKE '%$keyword%'");
        return $this->db->get('mahasiswa')->result();
    }

}