<?php 
class petugas_model extends CI_Model{
    public function getAllpetugas()
    {
        return $this->db->get('petugas')->result();
    }

    public function getpetugasById($id)
    {
        return $this->db->get_where('petugas', array('id' => $id))->row();
    }

    public function tambahDatapetugas($data)
    {
        $this->db->insert('petugas', $data);
        return $this->db->affected_rows();
    }

    public function hapusDatapetugas($id)
    {
        $this->db->where("id = $id");
        return $this->db->delete('petugas');;
    }


    public function ubahDatapetugas($data)
    {
        $this->db->where("id = '$data[id]'");
        return $this->db->update('petugas', $data);
    }


    public function cariDatapetugas($keyword)
    {
       $this->db->where("nama LIKE '%$keyword%'");
        return $this->db->get('petugas')->result();
    }

}