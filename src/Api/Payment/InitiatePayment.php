<?php
use App\Configuration\Database;
use App\Models\Payment\Payment;
use App\Commons\PaymentProcessor;


error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');


require_once '../../../vendor/autoload.php';





$database = new Database();
$payment_processor = new PaymentProcessor();
$database_connection = $database->connect();


$payment = new Payment($database_connection, $payment_processor);

$payment->initiate_payment();

