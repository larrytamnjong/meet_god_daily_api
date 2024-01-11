<?php

namespace App\Models\Payment;

use App\Configuration\Database;
use Exception;

class WebHook{
    private $database_connection;
    private $table = 'payments';

    public function __construct()
    {
        $database = new Database();
        $this->database_connection = $database->connect();
    }


    public function process_webhook($body){
        try{
            $response = json_decode($body);
            $query = 'UPDATE '.$this->table.' SET Completion_date = NOW(), status = "complete" WHERE tx_ref = "'.$response->data->tx_ref.'"';
            $statement = $this->database_connection->prepare($query);
            $statement->execute();
            return true;
        }catch(Exception $ex){
            return false;
        }
        
    }
}