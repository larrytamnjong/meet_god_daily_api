<?php

namespace App\Models\Payment;

use App\Models\User\User;
use App\Configuration\Database;
use App\Commons\PaymentProcessor;
use App\Configuration\Settings;
use App\Commons\TransactionReference;

error_reporting(E_ALL);
ini_set('display_error', 1);



class Payment
{

  private $database_connection;
  private $table = 'payments';
  private $payment_processor;
  private $settings;
  private $transaction_reference;
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
    $this->transaction_reference = new TransactionReference();
    $this->user = new User();
    $this->settings = new Settings();

    $this->payment_processor =  new PaymentProcessor();
    $this->database_connection = $database->connect();
  }

  public function initiate_payment($user)
  {

    $user_information = $this->user->get_user_by_id($user['id']);

    $this->payment_processor->secret_key = $this->settings->get_setting('secret_key');

    $this->payment_processor->payer_information = array(
      "phone_number" => $user['phone'],
      "amount" => $this->settings->get_setting('amount'),
      "currency" => "XAF",
      "email" => $user_information['email'],
      "tx_ref" => $this->transaction_reference->generate_reference()
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

  public function get_payments_for_year($user_id, $year) {
    try {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id AND status = "complete" AND YEAR(completion_date) = :year';
        $statement = $this->database_connection->prepare($query);
        $statement->bindValue(':user_id', $user_id);
        $statement->bindValue(':year', $year);
        $statement->execute();

        $payments = $statement->fetchAll(\PDO::FETCH_ASSOC);
        
        return $payments;
    } catch (\PDOException $ex) {
        echo $ex->getMessage();
        return []; 
    }
}
public function get_all_payments_for_user($user_id)
{
    try {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id ORDER BY creation_date DESC';
        $statement = $this->database_connection->prepare($query);
        $statement->bindValue(':user_id', $user_id);
        $statement->execute();

        $payments = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $payments;
    } catch (\PDOException $ex) {
       echo $ex->getMessage();
        return [];
    }
}
}
