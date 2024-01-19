<?php

use App\Models\Devotion\Devotion;

error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');


require_once '../../../vendor/autoload.php';




$devotion = new Devotion();


$past_devotions_by_month = $devotion->get_past_devotion_by_month();



if($past_devotions_by_month){
    http_response_code(200);
    echo json_encode($past_devotions_by_month);
}else{
    http_response_code(505);
    echo json_encode(array("message" => "error in fetching devotions"));
}