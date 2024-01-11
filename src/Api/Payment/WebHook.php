<?php

use App\Models\Payment\WebHook;



error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');


require_once '../../../vendor/autoload.php';


$body = @file_get_contents("php://input");

$webhook = new WebHook();


if($webhook->process_webhook($body)){
    http_response_code(200);
}else{
    http_response_code(505);
}
   



