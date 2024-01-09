<?php
use App\Configuration\Database;
use App\Models\DailyDevotion\DailyDevotion;

error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');


require_once '../../../vendor/autoload.php';

$devotion_date = $_GET['devotion_date'] ?? date('Y-m-d');

$database = new Database();
$database_connection = $database->connect();


$devotion = new DailyDevotion($database_connection);

$specific_devotion = $devotion->get_specific_devotion($devotion_date);


if($specific_devotion){
    http_response_code(200);
    echo json_encode($specific_devotion);
}else{
    http_response_code(505);
    echo json_encode(array("message" => "error in getting devotion"));
}