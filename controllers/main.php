<?php
class Main extends Controller{
    function __construct()
    {
        parent::__construct();
        //echo 'Nuevo controller <br>';
    }

    function render(){
        $this->view->render('main/index');
    }

    function sayHi(){
        echo 'Hi controller! <br>';
    }
}