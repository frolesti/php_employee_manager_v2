<?php

class UserModel extends Model{

    public function __construct()
    {
        parent:: __construct();
    }

    public function getUserByMail($email){

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM users WHERE user_email = :email');

            $query->execute(['email' => $email]);

            return $query->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}