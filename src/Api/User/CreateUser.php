<?php

// error_reporting(E_ALL);
// ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
require_once '../../../vendor/autoload.php';


use App\Models\User\User;

$user = new User();


if(count($_POST))
{
    $user_details = [
        'full_name' => $_POST['full_name'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password'],
        'email' => $_POST['email']
    ];
    
    if($user->create_user($user_details))
    {
        http_response_code(200);
        echo json_encode(array('message' => 'user created'));
    }else{
        http_response_code(500);
        echo json_encode(array("message" => 'user not created'));
    }
}
