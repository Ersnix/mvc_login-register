<?php
class Register extends Controllers
{
    public function index()
    {
        $this->view('register/index');
    }
    public function prosesRegister()
    {
        if ($this->model('Register_model')->register($_POST) > 0){
            $_SESSION['register'] = "berhasil";
            header('location:'.BASEURL);
        };
    }
}
