<?php

namespace App\Models\Payment;

error_reporting(E_ALL);
ini_set('display_error', 1);



class Payment
{

    private $connection;
    private $table = 'payments';
    private $payment_processor;

    private $id;
    private $user_id;
    private $tx_ref;
    private $amount;
    private $creation_date;
    private $completion_date;

   

    public function __construct($database_connection, $payment_processor)
    {
        $this->connection = $database_connection;
        $this->payment_processor = $payment_processor;

        
    }

    public function initiate_payment(){
      $this->payment_processor->initiate_payment();
    }
}
