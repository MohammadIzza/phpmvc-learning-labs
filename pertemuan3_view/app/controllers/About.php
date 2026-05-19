<?php 
    class About extends Contorller{

        public function index($nama ="Mohammad Izza Hakiki", $pekerjaan="mahasiswa",$umur = 14){
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['umur'] = $umur;
            
            $data['judul'] = 'About';

            $this->view('templetes/header',$data);
            $this->view('about/index',$data);
            $this->view('templetes/footer');
        }
        public function Page(){
            $data['judul'] = 'Page';

            $this->view('templetes/header',$data);
            $this->view('about/page');
            $this->view('templetes/footer');
        }
    }