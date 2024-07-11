<?php
class about extends Controller{
    public function index(){
       $data['title'] = 'About';
       $this->view('tamplate/header' , $data);
       $this->view('about/index' , $data);
       $this->view('tamplate/footer' , $data);
    }
}