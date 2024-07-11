<?php
class Home extends Controller{
    public function index(){
        $data['title'] = 'Library';
        $this->view('tamplate/header' , $data);
        $this->view('home/index' , $data);
        $this->view('tamplate/footer' , $data);
    }
}