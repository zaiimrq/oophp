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
        $this->db->query('SELECT nama,email,jurusan FROM mahasiswa WHERE username=:username');
        $this->db->bind('username', $username);

        return $this->db->single();
    }

    public function hapus($username)
    {
        $this->db->query("DELETE FROM mahasiswa WHERE username=:username");
        $this->db->bind('username', $username);

        return $this->db->rowCount();

    }
}