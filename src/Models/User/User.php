<?php

namespace App\Models\User;
use App\Configuration\Database;
use App\Commons\Password;




// error_reporting(E_ALL);
// ini_set('display_error', 1);


class User
{
    private $database_connection;
    private $table = "users";
    public $password_manager;

    private $id;
    private $full_name;
    private $phone;
    private $email;
    private $password;
    private $creation_date;


    public function __construct()
    {
        $database = new Database();
        $this->password_manager = new Password();

        $this->database_connection = $database->connect();
       
    }

    public function create_user($user)
    {

        try {
            $this->full_name = $user['full_name'];
            $this->phone = $user['phone'];
            $this->password = $this->password_manager->encrypt($user['password']);
            $this->email = $user['email'];



            $query = 'INSERT INTO ' . $this->table . ' SET full_name = :full_name, phone = :phone, email = :email, password = :password,  creation_date = NOW()';

            $statement = $this->database_connection->prepare($query);
            $statement->bindValue('full_name', $this->full_name);
            $statement->bindValue('phone', $this->phone);
            $statement->bindValue('email', $this->email);
            $statement->bindValue('password', $this->password);


            if ($statement->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
           // echo $ex->getmessage();
        }
    }

    public function login_user($login_information)
    {
        try {
            $entered_phone = $login_information['phone'];
            $entered_password = $login_information['password'];


            $query = 'SELECT id, full_name, phone, email, password, creation_date  FROM ' . $this->table . ' WHERE phone = :phone';
            $statement = $this->database_connection->prepare($query);
            $statement->bindValue('phone', $entered_phone);
            $statement->execute();
            $user = $statement->fetch(\PDO::FETCH_ASSOC);

            if ($user) {
                $stored_password = $user['password'];
                if ($this->password_manager->check($entered_password, $stored_password)) {
                    return [
                        'id' => $user['id'],
                        'full_name' => $user['full_name'],
                        'phone' => $user['phone'],
                        'email' => $user['email'],
                        'creation_date' => $user['creation_date']
                    ];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function get_user_by_id($id)
    {

        $this->id = $id;
        
        try {

            $query = 'SELECT id, full_name, phone, email, creation_date  FROM ' . $this->table . ' WHERE id = :id';
            $statement = $this->database_connection->prepare($query);
            $statement->bindValue('id', $this->id);
            $statement->execute();
            $user = $statement->fetch(\PDO::FETCH_ASSOC);

            if ($user) {
                return [
                    'id' => $user['id'],
                    'full_name' => $user['full_name'],
                    'phone' => $user['phone'],
                    'email' => $user['email'],
                    'creation_date' => $user['creation_date']
                ];
               
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function otp_login($phone){
        $this->phone = $phone;
        try {

            $query = 'SELECT id, full_name, phone, email, creation_date  FROM ' . $this->table . ' WHERE phone = :phone';
            $statement = $this->database_connection->prepare($query);
            $statement->bindValue('phone', $this->phone);
            $statement->execute();
            $user = $statement->fetch(\PDO::FETCH_ASSOC);

            if ($user) {
                return [
                    'id' => $user['id'],
                    'full_name' => $user['full_name'],
                    'phone' => $user['phone'],
                    'email' => $user['email'],
                    'creation_date' => $user['creation_date']
                ];
               
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
}
