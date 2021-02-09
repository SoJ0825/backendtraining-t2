<?php
include "./includes/class-autoload.inc.php";

$requestUri = $_SERVER['REQUEST_URI'];
echo $requestUri . "<br>";
$router = str_replace('/backendtraining-t2', '', $requestUri);
$routerArray = explode('/', $router);
print_r($router);
echo "<br>";
// print_r($routerArray);
$send = $routerArray[1];
$id = '';
if (isset($routerArray[2])) {
    $id = $routerArray[2];
}

if ($router == '/' || $router == '/index') {
    include('home.php');
} elseif ($router == '/edit' || preg_match("/edit\/[0-9]/i", $router)) {
    include('edit.php');
} else {
    header('Location:http://localhost/backendtraining-t2/');
}
