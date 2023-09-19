<?php 


class Mahasiswa_model {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAll()
    {
        $this->db->query("SELECT nama, username, email, jurusan FROM mahasiswa ORDER BY id DESC");
        return $this->db->all();
    }

    public function get($username)
    {
        $this->db->query('SELECT * FROM mahasiswa WHERE username=:username');
        $this->db->bind('username', $username);

        return $this->db->single();
    }

    public function hapus($username)
    {
        $this->db->query("DELETE FROM mahasiswa WHERE username=:username");
        $this->db->bind('username', $username);

        return $this->db->rowCount();

    }

    public function tambahData($data)
    {
     
        $query = "INSERT INTO mahasiswa (nama, username, email, jurusan) 
                    VALUES (:nama, :username, :email, :jurusan)";
        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        return $this->db->rowCount();
    }

    public function ubah($data)
    {
        
        $query = "UPDATE mahasiswa SET nama = :nama, username = :username, email = :email, jurusan=:jurusan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        return $this->db->rowCount();
    }
}