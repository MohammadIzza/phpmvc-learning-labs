<?php 
    class About {

        public function index($nama ="Mohammad Izza Hakiki", $pekerjaan="mahasiswa"){
            echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
        }
        public function Page(){
            echo "ini adalah controler : ". __CLASS__ .'dan method : '. __METHOD__;
        }
    }