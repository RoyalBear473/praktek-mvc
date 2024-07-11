<?php
class Buku extends Controller{
    public function index(){
        $data ['title'] = 'Library';
        $data['buku'] = $this->model('buku_model')->getAllBuku();
        $this->view('tamplate/header' , $data);
        $this->view('buku/index' , $data);
        $this->view('tamplate/footer' , $data);
    }
    public function tambah(){
        if($this->model('buku_model')->tambahDataBuku($_POST) > 0){
            // FLASHER::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . URLUTAMA . '/buku');
            exit;
        }else{
            // FLASHER::setFlash('gagal', 'ditambahkan', 'warning');
            header('Location: ' . URLUTAMA . '/buku');
            exit;
        }
    }
}