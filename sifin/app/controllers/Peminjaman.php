<?php
class Peminjaman extends Controller
{
    public function __construct() 
{  
if($_SESSION['session_login'] != 'sudah_login') { 
Flasher::setMessage('Login','Tidak ditemukan.','danger'); 
header('location: '. base_url . '/login'); 
exit; 
} 
}
    public function index()
    {
        $data['title'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')
                                   ->getAllPeminjaman();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Peminjaman';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('peminjaman/create', $data);
        $this->view('templates/footer');
    }

    public function simpanPeminjaman()
    {
        if ($this->model('PeminjamanModel')
                 ->tambahPeminjaman($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
        }

        header('location: ' . base_url . '/peminjaman');
        exit;
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')
                                   ->getPeminjamanById($id);

        if (!$data['peminjaman']) {
            Flasher::setMessage('Data', 'tidak ditemukan', 'danger');
            header('location: ' . base_url . '/peminjaman');
            exit;
        }

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePeminjaman()
    {
        if ($this->model('PeminjamanModel')
                 ->updatePeminjaman($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
        } else {
            Flasher::setMessage('Gagal', 'diupdate atau tidak ada perubahan', 'danger');
        }

        header('location: ' . base_url . '/peminjaman');
        exit;
    }

    public function hapus($id)
    {
        if ($this->model('PeminjamanModel')->deletePeminjaman($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
        }

        header('location: ' . base_url . '/peminjaman');
        exit;
    }
}
