<?php

error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
require_once '../../../vendor/autoload.php';


use App\Models\User\User;

$user = new User();


if(count($_POST))
{
    $params = [
        'phone' => $_POST['phone'],
        'password' => $_POST['password']
    ];
    
    if($user->login_user($params))
    {
        http_response_code(200);
        echo json_encode($user->login_user($params));
    }else{
        http_response_code(404);
        echo json_encode(array("message" => 'access denied'));
    }
}
