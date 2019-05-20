<?php 
class Pegawai_model extends CI_Model{
    public function getAllPegawai()
    {
        return $this->db->get('pegawai')->result();
    }

    public function getPegawaiById($nip)
    {
        return $this->db->get_where('pegawai', array('nip' => $nip))->row();
    }

    public function tambahDataPegawai($data)
    {
        $this->db->insert('pegawai', $data);
        return $this->db->affected_rows();
    }

    public function hapusDataPegawai($nip)
    {
        $this->db->where("nip = $nip");
        return $this->db->delete('pegawai');;
    }


    public function ubahDataPegawai($data)
    {
        $this->db->where("nip = '$data[nip]'");
        return $this->db->update('pegawai', $data);
    }


    public function cariDataMahasiswa($keyword)
    {
       $this->db->where("nama LIKE '%$keyword%'");
        return $this->db->get('pegawai')->result();
    }

}