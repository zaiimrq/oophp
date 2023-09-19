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

            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa' );
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa' );
            exit;
        }
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahData($_POST) > 0) {

            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa' );
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa' );
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->get($_POST['username']));
    }

    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubah($_POST) > 0) {

            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mahasiswa' );
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa' );
            exit;
        }
    }
}