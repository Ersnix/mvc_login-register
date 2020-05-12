<?php 
class Login extends Controllers{
    public function index(){
        $this->view('login/index');
    }

    public function prosesLogin(){
       if( $this->model('Login_model')->login($_POST) != null){
           $_SESSION['status'] = 'login';
           header('location:'.BASEURL.'/home');
       }else{
           $_SESSION['status'] = 'gagal';
           header('location:'.BASEURL);
       }
    }
}