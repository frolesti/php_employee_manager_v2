<?php

class EmployeeModel extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data){

        try{
            $query = $this->db->connect()->prepare('INSERT INTO employees (name, second_name, age) VALUES(:name, :second_name, :age)');
            $query->execute($data);
            return true;

        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }

        echo "Insertar Datos";
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

    public function getById($id){
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM employees WHERE id = :id');

            return $query->execute($id);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}