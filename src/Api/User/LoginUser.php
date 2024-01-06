<?php

error_reporting(E_ALL);
ini_set('display_error', 1);


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
require_once '../../../vendor/autoload.php';


use App\Models\User\User;
use App\Configuration\Database;
use App\Commons\Password;


$database = new Database();
$password_manager = new Password();


$database_connection = $database->connect();


$user = new User($database_connection, $password_manager);


if(count($_POST))
{
    $params = [
        'phone' => $_POST['phone'],
        'password' => $_POST['password']
    ];
    
    if($user->login_user($params))
    {
        echo json_encode($user->login_user($params));
    }else{
        http_response_code(404);
        echo json_encode(array("message" => 'access denied'));
    }
}
