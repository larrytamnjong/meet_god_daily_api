<?php
use App\Configuration\Database;
use App\Models\DailyDevotion\DailyDevotion;

error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');


require_once '../../../vendor/autoload.php';



$database = new Database();
$database_connection = $database->connect();


$devotion = new DailyDevotion($database_connection);

$todays_devotion = $devotion->get_todays_devotion();


if($todays_devotion){
    http_response_code(200);
    echo json_encode($todays_devotion);
}else{
    http_response_code(505);
    echo json_encode(array("message" => "error in getting devotion"));
}