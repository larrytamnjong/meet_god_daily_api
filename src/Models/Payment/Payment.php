<?php

namespace App\Models\Payment;

use App\Models\User\User;
use App\Configuration\Database;
use App\Commons\PaymentProcessor;

error_reporting(E_ALL);
ini_set('display_error', 1);



class Payment
{

  private $database_connection;
  private $table = 'payments';
  private $payment_processor;
  private $user;


  private $id;
  private $user_id;
  private $tx_ref;
  private $amount;
  private $status;
  private $creation_date;
  private $completion_date;



  public function __construct()
  {
    $database = new Database();
    $this->user = new User();

    $this->payment_processor =  new PaymentProcessor();
    $this->database_connection = $database->connect();
  }

  public function initiate_payment($user)
  {

    $user_information = $this->user->get_user_by_id($user['id']);

    $this->payment_processor->payer_information = array(
      "phone_number" => $user['phone'],
      "amount" => 2000,
      "currency" => "XAF",
      "email" => $user_information['email'],
      "tx_ref" => "BJUYU3998fcdsd4ds9"
    );

    $payment = $this->payment_processor->initiate_payment();
    if ($payment) {
      $this->user_id = $user['id'];
      $this->tx_ref = $payment->data->tx_ref;
      $this->amount = '2000';

      return $this->save_payment_details();
    } else {
      return false;
    }
  }

  private function save_payment_details()
  {

    try {
      $query = 'INSERT INTO ' . $this->table . ' SET user_id = :user_id, tx_ref = :tx_ref, amount = :amount, creation_date = NOW()';

      $statement = $this->database_connection->prepare($query);
      $statement->bindValue('user_id', $this->user_id);
      $statement->bindValue('tx_ref', $this->tx_ref);
      $statement->bindValue('amount', $this->amount);

      if ($statement->execute()) {
        return true;
      } else {
        return false;
      }
    } catch (\PDOException $ex) {
      echo $ex->getmessage();
      return false;
    }
  }
}
