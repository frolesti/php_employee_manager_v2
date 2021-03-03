<?php
class Employee extends Controller{
    function __construct()
    {
        parent::__construct();

        $url = 'models/employeeModel.php';
        require $url;
        $this->view->message ='';
        $this->view->employees = [];
        $this->model = new EmployeeModel();
    }

    function render(){
        $this->view->render('employee/index');
    }

    function insertEmployee(){

        unset($_POST["submit"]);
        $message ='';

        if($this->model->insert($_POST)){
            $message = "Employee created!";
        }else {
            $message = "Employee couldn't be created!";
        }

        $this->view->message = $message;
        $this->render();
    }

    function viewEmployee($param = null){
        $employee = $this->model->getById($param[0]);
        $this->view->employee = $employee;
        $this->view->render('employee/index');
    }

    function updateEmployee(){

    }

    function deleteEmployee(){

    }
}