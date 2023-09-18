<?php 

class Mahasiswa extends Controller {
    public function index()
    {
        $data['mhs'] = $this->model('Mahasiswa_model')->getAll();
        $this->view('templates/header');
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($username)
    {
        $mhs = $this->model('Mahasiswa_model')->get($username);
        $this->view('templates/header');
        $this->view('mahasiswa/detail', $mhs);
        $this->view('templates/footer');
    }

    public function hapus($username)
    {
        if ($this->model('Mahasiswa_model')->hapus($username) > 0) {
            
            header('Location: ' . BASEURL . '/mahasiswa' );
            exit;
        }
    }
}