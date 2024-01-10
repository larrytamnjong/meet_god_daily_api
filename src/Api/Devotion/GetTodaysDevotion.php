<?php

use App\Models\Devotion\Devotion;

error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');


require_once '../../../vendor/autoload.php';


$devotion = new Devotion();

$todays_devotion = $devotion->get_todays_devotion($_GET['id']);


if($todays_devotion){
    http_response_code(200);
    echo json_encode($todays_devotion);
}else{
    http_response_code(505);
    echo json_encode(array("message" => "error in getting devotion"));
}