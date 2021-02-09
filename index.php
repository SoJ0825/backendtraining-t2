<?php
include "./includes/class-autoload.inc.php";

$requestUri = $_SERVER['REQUEST_URI'];
$router = str_replace('/backendtraining-t2', '', $requestUri);
$routerArray = explode('/', $router);

if ($router == '/' || $router == '/index') {
    include('home.php');
} elseif ($router == '/edit' || preg_match("/edit\/[0-9]/i", $router)) {
    $id = $routerArray[2];
    include('edit.php');
} elseif ($router == '/process' || preg_match("/process\/[A-z]+/", $router) || preg_match("/process\/[A-z]+\/[0-9]+/", $router)) {
    $send = $routerArray[2];
    $id = $routerArray[3];
    include('process.php');
} else {
    header('Location:http://localhost/backendtraining-t2/');
}
