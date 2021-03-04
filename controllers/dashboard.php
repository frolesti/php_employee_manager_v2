<?php
class Dashboard extends Controller{
    function __construct()
    {
        parent::__construct();
        
        $url = 'models/employeeModel.php';
        require $url;
        $this->view->message ='';
        $this->model = new EmployeeModel();
    }

    function render(){
        $this->view->render('dashboard/index');
    }

    function getEmployee(){

        $employees = $this->model->get();
        $this->view->employees = $employees;
        $this->render();
    }

    function deleteEmployee($param){

        if($this->model->delete($param[0])){
            $message = "Employee deleted!";
        }else {
            $message = "Employee couldn't be deleted!";
        }

        $this->view->message = $message;
        header('Location: '. URL .'dashboard/getEmployee');
    }
}