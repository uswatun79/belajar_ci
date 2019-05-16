<?php 

class Makul_model {
    private $table = 'makul';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMakul()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMakulById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function cariDataMakul()
    {
        $keyword = trim($_POST['keyword']);
        $query = "SELECT * FROM makul WHERE makul_kode LIKE :keyword OR makul_nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function tambahDataMakul($data)
    {
        $query = "INSERT INTO makul
                    VALUES
                  ('', :makul_kode, :makul_nama, :makul_sks)";
        
        $this->db->query($query);
        $this->db->bind('makul_kode', $data['makul_kode']);
        $this->db->bind('makul_nama', $data['makul_nama']);
        $this->db->bind('makul_sks', $data['makul_sks']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMakul($id)
    {
        $query = "DELETE FROM makul WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMakul($data)
    {
        $query = "UPDATE makul SET
                    makul_kode = :makul_kode,
                    makul_nama = :makul_nama,
                    makul_sks = :makul_sks
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('makul_kode', $data['makul_kode']);
        $this->db->bind('makul_nama', $data['makul_nama']);
        $this->db->bind('makul_sks', $data['makul_sks']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}