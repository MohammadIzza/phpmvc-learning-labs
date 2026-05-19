<?php 
 class Home extends Contorller{
    public function index (){
        $data['judul'] = 'Home';

        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templetes/header',$data);
        $this->view('home/index',$data);
        $this->view('templetes/footer');
    }
 }