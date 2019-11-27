<?php 
class dosen_model extends CI_Model{
    public function getAlldosen()
    {
        return $this->db->get('dosen')->result();
    }

    public function getdosenById($id)
    {
        return $this->db->get_where('dosen', array('id' => $id))->row();
    }

    public function tambahDatadosen($data)
    {
        $this->db->insert('dosen', $data);
        return $this->db->affected_rows();
    }

    public function hapusDatadosen($id)
    {
        $this->db->where("id = $id");
        return $this->db->delete('dosen');;
    }


    public function ubahDatadosen($data)
    {
        $this->db->where("id = '$data[id]'");
        return $this->db->update('dosen', $data);
    }


    public function cariDatadosen($keyword)
    {
       $this->db->where("nama LIKE '%$keyword%'");
        return $this->db->get('dosen')->result();
    }

}