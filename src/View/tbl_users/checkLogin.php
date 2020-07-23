<?php
session_start();
require '../../../vendor/autoload.php';


$controllerUser = new \Lib\Controller\UserController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
   $controllerUser->login($username,$password);
}else{
    $controllerUser->logOut();
}


?>