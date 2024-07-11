<?php
class Buku extends Controller{
    public function index(){
        $data ['title'] = 'Library';
        $data['buku'] = $this->model('buku_model')->getAllBuku();
        $this->view('tamplate/header' , $data);
        $this->view('buku/index' , $data);
        $this->view('tamplate/footer' , $data);
    }
}