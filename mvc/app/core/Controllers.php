<?php  
class Controllers{
    public function view($view){
        require_once('../app/views/'.$view.'.php');
    }

    public function model($model){
        require_once('../app/model/'.$model.'.php');
        return new $model;
    }
}