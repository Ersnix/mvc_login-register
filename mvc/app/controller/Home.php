<?php 
class Home extends Controllers{
    public function index(){
        $this->view('home/index');
    }

    public function logout(){
        unset($_SESSION['status']);
        header('location:'.BASEURL);
    }
}