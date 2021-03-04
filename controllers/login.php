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
        $this->view->render('login/index');
    }

    public function validateUser(){

        $user = $this->model->getUserByMail($_POST['email']);

        if(isset($user) && password_verify($_POST['password'], $user['user_password'])){

            $_SESSION['id'] = $user['user_email'];
            $_SESSION['sessionTime'] = time() + 600;

            header('Location: ' . URL . 'dashboard/getEmployee');
        } else {
            $this->view->message = "Credenciales incorrectas";
        }
    }

    function logout(){
        session_destroy();
        header('Location: ' . URL . 'login');
    }
}