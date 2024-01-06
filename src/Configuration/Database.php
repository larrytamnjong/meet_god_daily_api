<?php

namespace App\Configuration;

class Database {
   
    private $host = 'localhost';
    private $db_name = 'meet_god_daily_db';
    private $username = 'root';
    private $password = '';
    private $connection;


    public function connect()
    {
        $this->connection = null;
        try
        {
            $this->connection = new \PDO('mysql:host='.$this->host.';dbname='.$this->db_name, $this->username, $this->password,);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            
        }
        catch(\PDOException $e)
        {
            echo $e->getMessage();
        }

        return $this->connection;
    }
}