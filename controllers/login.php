<?php

class Login extends Controller{

    public function __construct()
    {
        parent:: __construct();

        $url = 'models/userModel.php';
        require $url;
        $this->view->message ='';
        $this->model = new UserModel();
    }

    public function render(){
        $this->view->render();
    }

    public function validateUser(){

        $user = $this->model->getUserByMail($_POST['email']);

        if(isset($user) && password_verify($_POST['password'], $user['user_password'])){

            session_start();
            header('Location: ' . URL . 'dashboard/getEmployee');
        } else {
            $this->view->message = "Credenciales incorrectas";
        }
    }
}