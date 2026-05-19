<?php 
class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();

        // Memeriksa apakah $url memiliki elemen sebelum mengaksesnya
        if(isset($url[0]) && file_exists('../app/controllers/'. $url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            // Jika tidak ada controller yang ditentukan, Anda bisa mengatur controller default
            $this->controller = 'Home'; // Atau controller default lainnya
        }

        // Memuat controller
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // // Memeriksa method
        if(isset($url[1])){
            
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Menangani parameter
       if(!empty($url)){
            $this->params = array_values($url);
       }
        
        // Memanggil method dengan parameter
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}