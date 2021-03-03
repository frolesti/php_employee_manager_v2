<?php

class Helper extends Controller{

    function __construct()
    {
        parent::__construct();
    }
    
    function render(){
        $this->view->render('helper/index');
    }
}