<?php

class EmployeeModel extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data){

        try{
            $query = $this->db->connect()->prepare('INSERT INTO employees (employee_name, employee_last_name, employee_email, employee_gender, employee_city, employee_street_address, employee_state, employee_age, employee_postal_code, employee_phone_number) VALUES(:employee_name, :employee_last_name, :employee_email, :employee_gender, :employee_city, :employee_street_address, :employee_state, :employee_age, :employee_postal_code, :employee_phone_number)');
            $query->execute($data);
            return true;

        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function get(){
        $items = [];
        try {
            $query = $this->db->connect()->query('SELECT * FROM employees');

            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                array_push($items, $row);
            }
            return $items;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getById($emp_no){
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM employees WHERE emp_no = :emp_no');

            $query->execute(['emp_no' => $emp_no]);

            return $query->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function update($data){

        print_r($data);
        try{
            $query = $this->db->connect()->prepare('UPDATE employees SET employee_name = :employee_name, employee_last_name = :employee_last_name, employee_email =:employee_email, employee_gender = :employee_gender, employee_city = :employee_city, employee_street_address = :employee_street_address, employee_state = :employee_state, employee_age = :employee_age, employee_postal_code = :employee_postal_code, employee_phone_number = :employee_phone_number WHERE emp_no = :emp_no');
            $query->execute($data);
            return true;

        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function delete($emp_no){

        try{
            $query = $this->db->connect()->prepare('DELETE FROM employees WHERE emp_no = :emp_no');
            $query->execute(['emp_no' => $emp_no]);
            return true;

        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}