<?php

    
    class Contorller {
        public function view($view, $data=[]){

            require_once '../app/views/'. $view .'.php';
        }
        public function model($model){
            // require_once '../models/' .$model. '.php';
            require_once '../models/'.$model.'.php';
            
            return new $model;
        }
    }