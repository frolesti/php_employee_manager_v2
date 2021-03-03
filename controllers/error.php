<?php

class Myerror extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->message = "Loading error";
        $this->view->render('error/index');
        //echo 'Se ha producido un error en el controlador';
    }
}