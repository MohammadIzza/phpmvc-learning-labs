<?php 
 class Home extends Contorller{
    public function index (){
        $data['judul'] = 'Home';
        $this->view('templetes/header',$data);
        $this->view('home/index');
        $this->view('templetes/footer');
    }
 }