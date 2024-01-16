<?php

use App\Models\Payment\Payment;



error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');


require_once '../../../vendor/autoload.php';




$payment = new Payment();


if(count($_GET))
{
    

    if($payment->get_all_payments_for_user($_GET['id']))
    {
        http_response_code(200);
        echo json_encode($payment->get_all_payments_for_user($_GET['id']));
    }else
    {
        http_response_code(505);
        echo json_encode(array('message' => 'payment retrieval failure'));
    }
}
