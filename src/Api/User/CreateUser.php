<?php

// error_reporting(E_ALL);
// ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
require_once '../../../vendor/autoload.php';


use App\Models\User\User;
$request_body = @file_get_contents("php://input");
$decoded_request_body = json_decode($request_body);

$user = new User();


    $user_details = [
        'full_name' => $decoded_request_body->full_name,
        'phone' => $decoded_request_body->phone,
        'password' => $decoded_request_body->password,
        'email' => $decoded_request_body->email
    ];
    
    if($user->create_user($user_details))
    {
        http_response_code(200);
        echo json_encode(array('message' => 'user created'));
    }else{
        http_response_code(500);
        echo json_encode(array("message" => 'user not created'));
    }

