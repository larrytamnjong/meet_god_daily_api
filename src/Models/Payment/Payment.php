<?php

namespace App\Models\Payment;

error_reporting(E_ALL);
ini_set('display_error', 1);



class Payment
{

    private $connection;
    private $table = 'payments';

    private $id;
    private $user_id;
    private $tx_ref;
    private $amount;
    private $creation_date;
    private $completion_date;


    public function __construct($database_connection)
    {
        $this->connection = $database_connection;
        
    }

    public function initiate_payment(){
        
    }
}
