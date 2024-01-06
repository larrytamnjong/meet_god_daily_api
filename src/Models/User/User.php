<?php

namespace App\Models\User;



error_reporting(E_ALL);
ini_set('display_error', 1);


class User
{
    private $connection;
    private $table = "users";
    private $password_manager;

    public $id;
    public $full_name;
    public $phone;
    public $password;
    public $date_of_creation;

   
    public function __construct($database_connection, $password_manager)
    {
        $this->connection = $database_connection;
        $this->password_manager = $password_manager;
    }

    public function create_user($user_information)
    {
       
        try {
            $this->full_name = $user_information['full_name'];
            $this->phone = $user_information['phone'];
            $this->password = $this->password_manager->encrypt($user_information['password']);

            
         
            $query = 'INSERT INTO ' . $this->table . ' SET full_name = :full_name, phone = :phone, password = :password,  date_of_creation = NOW()';

            $statement = $this->connection->prepare($query);
            $statement->bindValue('full_name', $this->full_name);
            $statement->bindValue('phone', $this->phone);
            $statement->bindValue('password', $this->password);

            if ($statement->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
            echo $ex->getmessage();
        }
    }

    public function login_user($login_information){
        try{
            $entered_phone = $login_information['phone'];
            $entered_password = $login_information['password'];
    
           
            $query = 'SELECT id, full_name, phone, password  FROM ' . $this->table . ' WHERE phone = :phone';
            $statement = $this->connection->prepare($query);
            $statement->bindValue('phone', $entered_phone);
            $statement->execute();
            $user = $statement->fetch(\PDO::FETCH_ASSOC);
    
            if($user) {
                $stored_password = $user['password'];
                if($this->password_manager->check($entered_password, $stored_password)) {
                    return [
                        'id' => $user['id'],
                        'full_name' => $user['full_name'],
                        'phone' => $user['phone']
                    ];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (\PDOException $ex){
           echo $ex->getMessage();
           return false;
        }
    }
    
}
