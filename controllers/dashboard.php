<?php
class Dashboard extends Controller{
    function __construct()
    {
        parent::__construct();
        
        $url = 'models/employeeModel.php';
        require $url;
        $this->model = new EmployeeModel();
    }

    function render(){
        $this->view->render('dashboard/index');
    }

    function getEmployee(){

        $employees = $this->model->get();
        $this->view->employees = $employees;
        $this->view->render('dashboard/index');
    }
}